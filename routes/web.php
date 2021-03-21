<?php
use App\Http\Controllers\Surveycontroller;
use App\Http\Controllers\Portfoliocontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Markslistcontroller;
use App\Http\Controllers\Expriencescontroller;
use App\Http\Controllers\Signincontroller;
use App\Http\Controllers\Categorycontroller;
use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('master');
});
Route::get('/home',[Homecontroller::class,'list'])->name('home');

Route::get('/survay',[Surveycontroller::class,'list'])->name('survey');

Route::get('/markslist',[Markslistcontroller::class,'list'])->name('markslist');

Route::get('/portfolio',[Portfoliocontroller::class,'list'])->name('portfolio');

Route::get('/expriences&projects',[Expriencescontroller::class,'list'])->name('expriences&projects');
Route::get('/signin',[Signincontroller::class,'list'])->name('signin');

Route::get('/category',[Categorycontroller::class,'list'])->name('category');




// Route::get('/', function () {
//        return view('content.survey');
//     });
