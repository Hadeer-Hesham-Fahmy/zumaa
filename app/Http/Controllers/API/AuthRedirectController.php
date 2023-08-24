<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Auth;




class AuthRedirectController extends Controller
{

    public function index(Request $request)
    {
        $token = PersonalAccessToken::findToken($request->token);
        //toekn not found
        if (empty($token)) {
            return redirect()->route('login');
        }
        //user found 
        $user = $token->tokenable;
        Auth::loginUsingId($user->id);
        return redirect()->to($request->url);
    }
}
