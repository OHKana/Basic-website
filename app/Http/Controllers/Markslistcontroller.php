<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Markslistcontroller extends Controller
{
    public function      list()
    {
        return view('content.markslist');
     }
}
