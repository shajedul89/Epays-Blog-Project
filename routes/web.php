<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('frontend.index');
// });




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//post Management
Route::resource('postCategory','App\Http\Controllers\postCategoryController');
Route::resource('postTag','App\Http\Controllers\postTagController');
Route::resource('post','App\Http\Controllers\postController');

//User Managementy


//Frontend vierw Management
Route::get('/frontpage',[App\Http\Controllers\frontendViewManagement::class,'HomePage'])->name('fhome');
Route::get('/',[App\Http\Controllers\frontendViewManagement::class,'HomePageManage']);
Route::get('/blog',[App\Http\Controllers\frontendViewManagement::class,'blogview']);
Route::get('/contact',[App\Http\Controllers\frontendViewManagement::class,'contactsInfo']);
Route::get('/blogSingleView/{id}',[App\Http\Controllers\frontendViewManagement::class,'Blog_single_view']);



//Blog Tag Search

Route::get('/blog-tag-search/{slug}',[App\Http\Controllers\frontendViewManagement::class,'Blog_search_by_tag']) ->name('blog.search.tag');

//Blog category Search

Route::get('/blog-category-search/{slug}',[App\Http\Controllers\frontendViewManagement::class,'Blog_search_by_category']) ->name('blog.search.category');
//blog post Search
Route::get('/blog-search',[App\Http\Controllers\frontendViewManagement::class,'BlogSearch']) ->name('blog.search');


Route::group(['middleware' =>'editor'],function(){

// Settings
Route::get('/settings',[App\Http\Controllers\SettingsManagement::class,'settingsView']);
Route::put('/settingsUpdate',[App\Http\Controllers\SettingsManagement::class,'settingsViewUpdate']) ->name('settings.update');
});

Route::group(['middleware' =>'commentor'],function(){
    //User Route
Route::resource('user','App\Http\Controllers\UserManagement');

    });
