<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{

    //
    public function index(Request $request)
    {
        return Tag::when($request->page, function ($query) {
            return $query->paginate();
        }, function ($query) {
            return $query->get();
        });
       
    }
}
