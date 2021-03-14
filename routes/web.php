<?php
use App\Http\Controllers\Surveycontroller;
use App\Http\Controllers\Portfoliocontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Markslistcontroller;

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('master');
});
Route::get('/home',[Homecontroller::class,'list'])->name('home');

Route::get('/survay',[Surveycontroller::class,'list'])->name('survey');

Route::get('/markslist',[Markslistcontroller::class,'list'])->name('markslist');

Route::get('/portfolio',[Portfoliocontroller::class,'list'])->name('portfolio');


// Route::get('/', function () {
//        return view('content.survey');
//     });
