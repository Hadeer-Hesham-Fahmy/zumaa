<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;




class ExternalRedirectController extends Controller
{

    public function index(Request $request)
    {
        $externalUrl = $request->endpoint;
        if (empty($externalUrl)) {
            return response()->json([
                "message" => __("Failed"),
            ], 400);
        }
        $externalUrl = str_ireplace(";","&",$externalUrl);
        return Http::get($externalUrl)->json();
    }
}
