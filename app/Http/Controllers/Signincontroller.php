<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Signincontroller extends Controller
{
    public function      list()
    {
        return view('partials.signin');
     }

}
