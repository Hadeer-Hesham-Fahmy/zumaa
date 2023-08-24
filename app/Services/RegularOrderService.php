<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Coupon;
use App\Models\CouponUser;
use App\Models\PaymentMethod;
use App\Models\Vendor;
use App\Models\Wallet;
use App\Traits\OrderTrait;
use App\Traits\WalletTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;


class RegularOrderService
{
    use OrderTrait, WalletTrait;

    public function __constuct()
    {
        //
    }


    public function singleOrder(Request $request)
    {
        //check if vendor is active
        $vendor = Vendor::find($request->vendor_id);
        if (empty($vendor) || !$vendor->is_active) {
            throw new \Exception(__("Vendor not found or is inactive"), 1);
        }
        //
        DB::beginTransaction();
        $order = new order();
        $paymentLink = "";
        $message = "";
        //
        //handle the check to see if the order is payable by wallet
        // it will throw an exception if the order is not payable by wallet
        $this->isPayableByWallet();

        //save order
        $order->note = $request->note ?? '';
        $order->vendor_id = $request->vendor_id;
        $order->delivery_address_id = $request->delivery_address_id;
        $order->payment_method_id = $request->payment_method_id;
        $order->sub_total = $request->sub_total;
        $order->discount = $request->discount;
        $order->delivery_fee = $request->delivery_fee;
        $order->tip = $request->tip ?? 0.00;
        $order->tax = $request->tax;
        $order->tax_rate = Vendor::find($request->vendor_id)->tax ?? 0.0;
        $order->total = $request->total;
        $order->pickup_date = $request->pickup_date;
        $order->pickup_time = $request->pickup_time;
        $order->payment_status = "pending";
        if (\Schema::hasColumn("orders", 'fees')) {
            $order->fees = json_encode($request->fees ?? []);
        }
        $order->save();
        $order->setStatus($this->getNewOrderStatus($request));

        //save the coupon used
        $coupon = Coupon::where("code", $request->coupon_code)->first();
        if (!empty($coupon)) {
            $couponUser = new CouponUser();
            $couponUser->coupon_id = $coupon->id;
            $couponUser->user_id = \Auth::id();
            $couponUser->order_id = $order->id;
            $couponUser->save();
        }


        //products
        foreach ($request->products ?? [] as $product) {

            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->quantity = $product['selected_qty'];
            $orderProduct->price = $product['price'];
            $orderProduct->product_id = $product['product']['id'];
            $orderProduct->options = $product['options_flatten'];
            $orderProduct->options_ids = implode(",", $product['options_ids'] ?? []);
            $orderProduct->save();

            //reduce product qty
            $product = $orderProduct->product;
            if (!empty($product->available_qty)) {
                $product->available_qty = $product->available_qty - $orderProduct->quantity;
                $product->save();
            }
        }

        // photo for prescription
        if ($request->hasFile("photo")) {
            $order->clearMediaCollection();
            $order->addMedia($request->photo->getRealPath())->toMediaCollection();
        }
        // photos for prescription
        if ($request->hasFile("photos")) {
            $order->clearMediaCollection();
            foreach ($request->photos as $photo) {
                $order->addMedia($photo->getRealPath())->toMediaCollection();
            }
        }

        //
        if ($request->type == "pharmacy" && ($request->hasFile("photo") || $request->hasFile("photos"))) {
            $order->payment_status = "review";
            // $order->saveQuietly();
        }

        //
        $response = $this->processWalletOrderPayment($request, $order);
        $paymentLink = $response["link"];
        $message = $response["message"];


        //
        $order->save();

        //
        DB::commit();

        //
        $paymentToken = encrypt([
            "id" => $order->id,
            "code" => $order->code,
            "user_id" => $order->user_id,
        ]);

        return response()->json([
            "message" => $message,
            "link" => $paymentLink,
            "code" => $order->code,
            "token" => $paymentToken,
        ], 200);
    }

    public function multipleVendorOrder(Request $request)
    {

        //request structure
        /*
        data - [ array of vendor and products]
            - [
                [
                    vendor_id, sub_total, discount, delivery_fee, tip, tax, total
                ]
            ]
        rest of usually request body
        */
        //
        DB::beginTransaction();

        //handle the check to see if the order is payable by wallet
        // it will throw an exception if the order is not payable by wallet
        $this->isPayableByWallet();

        foreach ($request->data as $orderData) {

            //check if vendor is active
            $vendor = Vendor::find($orderData["vendor_id"]);
            if (empty($vendor) || !$vendor->is_active) {
                throw new \Exception(__("Vendor not found or is inactive"), 1);
            }

            //
            $orderData = json_decode(json_encode($orderData), true);
            $order = new order();
            $order->note = $request->note ?? '';
            $order->vendor_id = $orderData["vendor_id"];
            $order->delivery_address_id = $request->delivery_address_id;
            $order->payment_method_id = $request->payment_method_id;
            $order->sub_total = $orderData["sub_total"];
            $order->discount = $orderData["discount"];
            $order->delivery_fee = $orderData["delivery_fee"];
            $order->tip = $orderData["tip"] ?? 0.00;
            $order->tax = $orderData["tax"];
            $order->tax_rate = $request->tax_rate ?? Vendor::find($order->vendor_id)->tax ?? 0.00;
            $order->total = $orderData["total"];
            $order->pickup_date = $request->pickup_date;
            $order->pickup_time = $request->pickup_time;
            $order->payment_status = "pending";
            if (\Schema::hasColumn("orders", 'fees')) {
                $order->fees = json_encode($orderData['fees'] ?? []);
            }
            $order->save();
            $order->setStatus($this->getNewOrderStatus($request));

            //save the coupon used
            $coupon = Coupon::where("code", $request->coupon_code)->first();
            if (!empty($coupon)) {
                $couponUser = new CouponUser();
                $couponUser->coupon_id = $coupon->id;
                $couponUser->user_id = \Auth::id();
                $couponUser->order_id = $order->id;
                $couponUser->save();
            }


            //products
            foreach ($orderData["products"] ?? [] as $product) {

                $orderProduct = new OrderProduct();
                $orderProduct->order_id = $order->id;
                $orderProduct->quantity = $product['selected_qty'];
                $orderProduct->price = $product['price'];
                $orderProduct->product_id = $product['product']['id'];
                $orderProduct->options = $product['options_flatten'];
                $orderProduct->options_ids = implode(",", $product['options_ids'] ?? []);
                $orderProduct->save();

                //reduce product qty
                $product = $orderProduct->product;
                if (!empty($product->available_qty)) {
                    $product->available_qty = $product->available_qty - $orderProduct->quantity;
                    $product->save();
                }
            }

            //
            $paymentLink = "";
            $message = "";
            //
            $paymentMethod = PaymentMethod::find($request->payment_method_id ?? 0);

            if (empty($paymentMethod)) {
                $message = __("Order placed successfully. You will be notified once order is prepared and ready");
            } else if ($paymentMethod->is_cash) {

                //
                $order->payment_status = "pending";

                //wallet check
                if ($paymentMethod->slug == "wallet") {
                    //
                    $wallet = Wallet::mine()->first();
                    if (empty($wallet) || $wallet->balance < $orderData["total"]) {
                        throw new \Exception(__("Wallet Balance is less than order total amount"), 1);
                    } else {
                        //
                        $this->orderWalletPaymentProcess($wallet, $orderData["total"], $order);
                        //mark order payment has successful
                        $order->payment_status = "successful";
                    }
                }

                // $order->saveQuietly();
                $message = __("Order placed successfully. Relax while the vendor process your order");
            } else {
                $message = __("Order placed successfully. Please follow the link to complete payment.");
            }

            //
            $order->save();
        }

        //
        DB::commit();

        return response()->json([
            "message" => $message,
            "link" => $paymentLink,
        ], 200);
    }
}
