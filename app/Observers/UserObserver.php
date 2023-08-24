<?php

namespace App\Observers;

use App\Models\User;
use App\Mail\NewAccountMail;
use App\Services\JobHandlerService;
use App\Services\MailHandlerService;
use App\Traits\FirebaseAuthTrait;

class UserObserver
{

    use FirebaseAuthTrait;

    public function creating(User $user)
    {
        //
        $user->code = \Str::random(3) . "" . $user->id . "" . \Str::random(2);
    }

    public function created(User $user)
    {
        //update wallet
        if (empty($user->wallet)) {
            $user->createWallet(0);
        }
        //send mail
        try {
            // \Mail::to($user->email)->send(new NewAccountMail($user));
            MailHandlerService::sendMail(new NewAccountMail($user), $user->email);
        } catch (\Exception $ex) {
            // logger("Mail Error", [$ex]);
            logger("Mail Error: please check your mail server settings");
        }

        //set vehicle type id, if any to firebase
        $this->updateDriverVehicleType($user);
        //enforce user with client role, this will be overrite later if role is assigned again
        if (empty($user->roles())) {
            $user->syncRoles("client");
        }
    }

    public function updated(User $user)
    {
        //set vehicle type id, if any to firebase
        $this->updateDriverVehicleType($user);
    }

    public function deleting(User $model)
    {
    }



    // UPDATE DRIVER DATA TO FIRESTORE
    public function updateDriverVehicleType(User $user)
    {

        //driver user
        if (!$user->hasRole('driver')) {
            return;
        }

        //
        (new JobHandlerService())->driverVehicleTypeJob($user);
    }
}