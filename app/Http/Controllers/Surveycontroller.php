<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Surveycontroller extends Controller
{
    public function      list()
    {
        return view('content.survey');
     }
}
