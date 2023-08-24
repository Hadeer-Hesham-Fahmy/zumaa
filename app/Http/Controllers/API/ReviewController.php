<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;


class ReviewController extends Controller
{

    //
    public function index(Request $request)
    {

        return Review::with(
            'vendor',
            'user'
        )->where('vendor_id', $request->vendor_id)
            ->paginate($this->perPage);
    }
}
