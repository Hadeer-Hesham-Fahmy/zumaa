<?php

namespace App\Traits;

use App\Models\Order;
use App\Models\User;
use App\Models\UserToken;
use App\Models\Vendor;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\AndroidConfig;
use Kreait\Firebase\Messaging\ApnsConfig;
use Kreait\Firebase\Messaging\WebPushConfig;

trait FirebaseMessagingTrait
{

    use FirebaseAuthTrait, OrderNotificationStatusMessageTrait, FirebaseNotificationValidateTrait;
    public $tempLocale;


    //
    private function sendFirebaseNotification(
        $topic,
        $title,
        $body,
        array $data = null,
        bool $onlyData = true,
        string $channel_id = "basic_channel",
        bool $noSound = false,
        String $image = null
    ) {

        // igNore in local
        if (\App::environment('local')) {
            return;
        }

        //check if notification has been sent before
        if ($this->validateNotification($topic, $title, $body, $data, $onlyData, $channel_id, $noSound, $image)) {
            return;
        }

        //getting firebase messaging
        $messaging = $this->getFirebaseMessaging();
        $messagePayload = [
            'topic' => (string) $topic,
            'notification' => $onlyData ? null : [
                'title' => $title,
                'body' => $body,
                'image' => $image,
                'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
                "channel_id" => $channel_id,
                "sound" => $noSound ? "" : "alert.aiff",
            ],
            'data' => $data,
        ];

        if (!$onlyData) {
            $messagePayload = [
                'topic' => (string) $topic,
                'notification' => [
                    'title' => $title,
                    'body' => $body,
                    'image' => $image,
                    'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
                    "channel_id" => $channel_id,
                    "sound" => $noSound ? "" : "alert.aiff",
                ],
            ];
        } else {

            if (empty($data["title"])) {
                $data["title"] = $title;
                $data["body"] = $body;
            }
            $messagePayload = [
                'topic' => (string) $topic,
                'data' => $data,
            ];
        }
        $message = CloudMessage::fromArray($messagePayload);

        //android configuration
        $androidConfig = [
            'ttl' => '3600s',
            'priority' => 'high',
            'data' => $data,
            'notification' => [
                'title' => $title,
                'body' => $body,
                'image' => $image,
                'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
                "channel_id" => $channel_id,
                "sound" => $noSound ? "" : "alert",
            ],
        ];

        $apnConfig = ApnsConfig::fromArray([
            'headers' => [
                // "apns-push-type": "background",
                'apns-priority' => '10',
            ],
            'payload' => [
                'aps' => [
                    'alert' => [
                        'title' => $title,
                        'body' => $body,
                        'image' => $image,
                        // 'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
                        // "channel_id" => $channel_id,
                    ],
                    // 'badge' => 42,
                    "sound" => $noSound ? "" : "alert",
                    "category" => "FLUTTER_NOTIFICATION_CLICK",
                ],
                "click_action" => "FLUTTER_NOTIFICATION_CLICK",
            ],
        ]);


        if ($onlyData) {
            if (empty($data["title"])) {
                $data["title"] = $title;
                $data["body"] = $body;
            }
            $androidConfig = [
                'ttl' => '3600s',
                'priority' => 'high',
                'data' => $data,
            ];
        }
        $config = AndroidConfig::fromArray($androidConfig);
        $message = $message->withAndroidConfig($config);
        // $message = $message->withApnsConfig($apnConfig);
        $messaging->send($message);
    }

    private function sendFirebaseNotificationToTokens(array $tokens, $title, $body, array $data = null)
    {

        // igNore in local
        if (\App::environment('local')) {
            return;
        }

        //check if notification has been sent before
        if ($this->validateTokenNotification($tokens, $title, $body)) {
            return;
        }

        if (!empty($tokens)) {
            //getting firebase messaging
            $messaging = $this->getFirebaseMessaging();
            $message = CloudMessage::new();
            //
            $config = WebPushConfig::fromArray([
                'notification' => [
                    'title' => $title,
                    'body' => $body,
                    'icon' => setting('websiteLogo', asset('images/logo.png')),
                ],
                'fcm_options' => [
                    'link' => $data[0],
                ],
            ]);
            //
            $message = $message->withWebPushConfig($config);
            $messaging->sendMulticast($message, $tokens);
        }
    }










    //
    public function sendOrderStatusChangeNotification(Order $order)
    {

        try {
            // logger("sendOrderStatusChangeNotification called");
            // logger("order notification", [$order->code]);
            $this->loadLocale();
            //order data
            $orderData = [
                'is_order' => "1",
                'order_id' => (string)$order->id,
                'status' => $order->status,

            ];
            //for taxi orders
            if (!empty($order->taxi_order) || empty($order->vendor)) {
                // logger("order type as taxi", [$order->code]);
                $this->sendTaxiOrderStatusChangeNotification($order);
                return;
            }
            //
            $managersId = $order->vendor->managers->pluck('id')->all() ?? [];
            $managersTokens = UserToken::whereIn('user_id', $managersId)->pluck('token')->toArray();

            //notification message
            $notificationTitle = setting('websiteName', env("APP_NAME"));
            $customerNotificationMessage = $this->getCustomerOrderNotificationMessage($order->status, $order);
            //customer
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, $customerNotificationMessage, $orderData);
            //vendor
            if (!empty($order->vendor_id)) {
                // logger("send vendor notification", []);
                $vendorNotificationMessage = $this->getVendorOrderNotificationMessage($order->status, $order);
                $vendorTopic = "v_" . $order->vendor_id . "";
                // logger("vendorTopic", [$vendorTopic]);
                $this->sendFirebaseNotification($vendorTopic, $notificationTitle, $vendorNotificationMessage, $orderData);
                //vendor web
                $this->sendFirebaseNotificationToTokens(
                    $managersTokens,
                    $notificationTitle,
                    $vendorNotificationMessage,
                    [
                        "" . route('orders') . "?filters[search]=" . $order->code . ""
                    ],
                );
            }
            //driver
            if ($order->status == "delivered" && !empty($order->driver_id)) {
                $this->sendFirebaseNotification(
                    $order->driver_id,
                    $notificationTitle,
                    $customerNotificationMessage,
                    $orderData
                );
            }


            // logger("About to send notification base order status",[
            //     "status" => $order->status
            // ]);
            //send notifications to admin & city-admin
            //admin
            if (setting("notifyAdmin", 0)) {
                //sending notification to admin accounts
                $adminsIds = User::admin()->pluck('id')->all();
                $adminTokens = UserToken::whereIn('user_id', $adminsIds)->pluck('token')->toArray();
                //
                $this->sendFirebaseNotificationToTokens(
                    $adminTokens,
                    __("Order Notification"),
                    __("Order #") . $order->code . " " . __("with") . " " . $order->vendor->name . " " . __("is now:") . " " . $order->status,
                    [
                        "" . route('orders') . "?filters[search]=" . $order->code . ""
                    ],
                );
            }
            //city-admin
            if (setting("notifyCityAdmin", 0) && !empty($order->vendor->creator_id)) {
                //sending notification to city-admin accounts
                $cityAdminTokens = UserToken::where('user_id', $order->vendor->creator_id)->pluck('token')->toArray();
                //
                $this->sendFirebaseNotificationToTokens(
                    $cityAdminTokens,
                    __("Order Notification"),
                    __("Order #") . $order->code . " " . __("with") . " " . $order->vendor->name . " " . __("is now:") . " " . $order->status,
                    [
                        "" . route('orders') . "?filters[search]=" . $order->code . ""
                    ],
                );
            }
            $this->resetLocale();
        } catch (\Exception $e) {
            logger("sendOrderStatusChangeNotification error", [$e->getMessage(), $e]);
        }
    }

    //
    public function sendTaxiOrderStatusChangeNotification(Order $order)
    {

        $this->loadLocale();
        //order data
        $orderData = [
            'is_order' => "0",
            'order_id' => (string)$order->id,
            'status' => $order->status,

        ];

        $pendingMsg = setting('taxi.msg.pending', __("Searching for driver"));
        $preparingMsg = setting('taxi.msg.preparing', __("Driver assigned to your trip and their way"));
        $readyMsg = setting('taxi.msg.ready', __("Driver has arrived"));
        $enrouteMsg = setting('taxi.msg.enroute', __("Trip started"));
        $completedMsg = setting('taxi.msg.completed', __("Trip completed"));
        $cancelledMsg = setting('taxi.msg.cancelled', __("Trip was cancelled"));
        $failedMsg = setting('taxi.msg.failed', __("Trip failed"));
        $notificationTitle = setting('websiteName', env("APP_NAME"));

        //'pending','preparing','ready','enroute','delivered','failed','cancelled'
        if ($order->status == "pending") {
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, $pendingMsg, $orderData);
        } else if ($order->status == "preparing") {
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, $preparingMsg, $orderData);
        } else if ($order->status == "ready") {
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, $readyMsg, $orderData);
        } else if ($order->status == "enroute") {

            //user
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, $enrouteMsg, $orderData);
        } else if ($order->status == "delivered") {


            //user/customer
            $this->sendFirebaseNotification(
                $order->user_id,
                $notificationTitle,
                $completedMsg,
                $orderData,
            );

            //user/customer overdraft
            $hasOverdraft = $order->has_over_draft;
            if ($hasOverdraft) {
                /**
                 * :amt - total
                 * :bal - outstanding
                 * :pai - already paid
                 */
                $amt = currencyFormat($order->outstanding_balance->amount ?? "");
                $bal = currencyFormat($order->outstanding_balance->balance ?? "");
                $pai = currencyFormat($order->outstanding_balance->paid ?? "");
                //
                if ($order->payment_method->slug == "cash") {
                    $customerOverDraftMsg = setting('taxi.msg.cash_overdraft_completed', (__("Pay driver") . ":amt"));
                } else {
                    $message = __("Trip total") . " :amt," . __("but you have paid") . " :pai ";
                    $message .= __("the balance of") . " :bal " . __("will be deduted from your account wallet");
                    $customerOverDraftMsg = setting('taxi.msg.overdraft_completed', $message);
                }
                //replce the values
                $customerOverDraftMsg = str_replace(":amt", $amt, $customerOverDraftMsg);
                $customerOverDraftMsg = str_replace(":bal", $bal, $customerOverDraftMsg);
                $customerOverDraftMsg = str_replace(":pai", $pai, $customerOverDraftMsg);
                //
                $this->sendFirebaseNotification(
                    $order->user_id,
                    $notificationTitle,
                    $customerOverDraftMsg,
                    $orderData,
                );
            }

            //driver
            if (!empty($order->driver_id)) {
                $this->sendFirebaseNotification(
                    $order->driver_id,
                    $notificationTitle,
                    $completedMsg,
                    $orderData
                );
            }
        } else if ($order->status == "failed") {
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, $failedMsg, $orderData);
        } else if ($order->status == "cancelled") {
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, $cancelledMsg, $orderData);
        } else if (!empty($order->status)) {
            $this->sendFirebaseNotification($order->user_id, $notificationTitle, __("Trip #") . $order->code . __(" has been ") . __($order->status) . "", $orderData);
        }


        //send notifications to admin & city-admin
        //admin
        if (setting("notifyAdmin", 0)) {
            //sending notification to admin accounts
            $adminsIds = User::admin()->pluck('id')->all();
            $adminTokens = UserToken::whereIn('user_id', $adminsIds)->pluck('token')->toArray();
            //
            $this->sendFirebaseNotificationToTokens(
                $adminTokens,
                __("Trip Notification"),
                __("Trip #") . $order->code . " " . __("by") . " " . $order->user->name . " " . __("is now:") . " " . $order->status,
                [route('orders')]
            );
        }
        $this->resetLocale();
    }


    public function sendOrderNotificationToDriver(Order $order)
    {


        //order data
        $orderData = [
            'is_order' => "1",
            'order_id' => (string)$order->id,
            'status' => $order->status,

        ];

        //aviod send order details notification data when order is taxi
        if (!empty($order->taxi_order)) {
            $orderData["is_order"] = "0";
        }

        //
        $this->loadLocale();
        $this->sendFirebaseNotification(
            $order->driver_id,
            __("Order Update"),
            __("Order #") . $order->code . __(" has been assigned to you"),
            $orderData
        );
        $this->resetLocale();
    }



    //LOCALE CONFIG
    public function loadLocale()
    {
        $this->tempLocale = setting('localeCode', 'en');
        \App::setLocale($this->tempLocale);
    }
    public function resetLocale()
    {
        \App::setLocale($this->tempLocale);
    }
}
