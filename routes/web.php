<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\Fullnamecontroller;
use App\Http\Controllers\Calcuclatorcontroller;
use App\Http\Controllers\Blogcontroller;
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
//
//
//Route::get('/', function (){
//    return view('welcome');
//});


Route::get('/', [Blogcontroller::class, 'home'])->name('blog');
Route::get('/add-blog', [Blogcontroller::class, 'addblog'])->name('add-blog');
Route::get('/manage-blog', [Blogcontroller::class, 'manageblog'])->name('manage-blog');
Route::get('/delete-blog/{id}', [Blogcontroller::class, 'deleteblog'])->name('delete-blog');
Route::get('/edit-blog/{id}', [Blogcontroller::class, 'editblog'])->name('edit-blog');
Route::get('/deatils-blog/{id}', [Blogcontroller::class, 'detailsblog'])->name('deatils-blog');
Route::post('/new-blog', [Blogcontroller::class, 'newblog'])->name('new_blog');
Route::post('/update-blog', [Blogcontroller::class, 'updateblog'])->name('update-blog');



// this is another part---------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('/about', [Homecontroller::class, 'about'])->name('about');


Route::get('/fullname', [Fullnamecontroller::class, 'index'])->name('full-name');
Route::post('/fullname', [Fullnamecontroller::class, 'getfullname'])->name('get-full-name');

Route::get('/calculator', [Calcuclatorcontroller::class, 'index'])->name('calculator');
Route::post('/calculator', [Calcuclatorcontroller::class, 'calculator'])->name('calculator');

Route::get('/student', [Homecontroller::class, 'student'])->name('student');
Route::get('/student-deatils/{id}', [Homecontroller::class, 'studentdetail'])->name('student-deatils');




Route::resource('companies', CompanyCRUDController::class);
