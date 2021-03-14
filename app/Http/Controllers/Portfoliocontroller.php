<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portfoliocontroller extends Controller
{
    public function      list()
    {
        return view('content.portfolio');
     }
}
