<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
require 'admin.php';


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerificationController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category/{slug}', [HomeController::class, 'categoryList'])->name('category.list');
Route::get('/tag/{slug}', [HomeController::class, 'tagList'])->name('tag.list');
Route::get('/search/', [HomeController::class, 'searchList'])->name('search.list');
Route::get('/image/{slug}', [HomeController::class, 'show'])->name('image.show');
Route::get('/page/{slug}', [HomeController::class, 'page'])->name('page');
Route::get('/downloadcount/{imageid}', [HomeController::class, 'downloadcount'])->name('downloadcount');
Route::post('/contactus/', [HomeController::class, 'contactus'])->name('contactus');

Route::get('/sitemap.xml', [HomeController::class, 'sitemap']);




Auth::routes(['verify'=>true]);




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/social', [LoginController::class, 'show'])->name('social.login');
Route::get('oauth/{driver}', [LoginController::class,'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [LoginController::class,'handleProviderCallback'])->name('social.callback');

//Route::get('auth/social', 'Auth\LoginController@show')->name('social.login');
//Route::get('oauth/{driver}', 'Auth\LoginController@redirectToProvider')->name('social.oauth');
//Route::get('oauth/{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');
Route::get('/cache',function(){
    Cache::flush();
    \Artisan::call('optimize');
   \Artisan::call('cache:clear');
     \Artisan::call('route:clear');
     
      \Artisan::call('config:clear');
     \Artisan::call('view:clear');
     \Artisan::call('config:cache');
   //  \Artisan::call('storage:link');
    // die;
});

Route::get('/email/verify', function () {
    return view('notice');
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

