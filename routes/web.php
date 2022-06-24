<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home',function(){
    return view ('home.home');
});
Route::get('/students',[StudentController::class,'index']);
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');

