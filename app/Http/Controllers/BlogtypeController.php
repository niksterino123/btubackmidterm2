<?php

namespace App\Http\Controllers;

use App\Models\Blogtype;
use Illuminate\Http\Request;

class BlogtypeController extends Controller
{
    public function store(Request $request){

        Blogtype::create( $request->except('_token'));

        return redirect()->back();
    }
}
