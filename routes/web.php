<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    //Email Verification
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
     
        return redirect('/home');
    })->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/',[HomeController::class,'homepage']);
Route::get('/home',[HomeController::class,'login']);
Route::get('/event-register',[HomeController::class,'eventRegister']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    //Admin login Route 
    Route::match(['get','post'],'login','AdminController@login');
    Route::match(['get','post'],'registration','AdminController@registration');

    Route::group(['middleware'=>['admin']], function(){
        //Admin Dashboard Route
        Route::get('dashboard','AdminController@dashboard');
        //Admin Logout Route
        Route::get('logout','AdminController@logout');
        //Admin Post
        Route::get('admin-posts','PostController@adminPost');
        Route::post('update-post-status','PostController@updatePostStatus');
        Route::match(['get','post'],'add-edit-post/{id?}','PostController@addEditPost');
        Route::get('delete-post/{id}','PostController@deletePost');

        //User Controller
        Route::get('users-view','UserController@usersView');
        Route::post('update-user-status','UserController@updateUserStatus');
        
    });

});
// SSLCOMMERZ Start
//Downloading Invice
Route::get('/download/invoice/{path}', [PaymentController::class, 'downloadInvoice'])->name('download.invoice');
Route::get('payment_view/{id}', [PaymentController::class,'paymentView']);
Route::get('user-invoice', [PaymentController::class,'showInvoice']);

Route::match(['get','post'],'/user-pay', [PaymentController::class, 'paymentCheckout']);
Route::get('/pay-now-host', [PaymentController::class, 'paymentHosted']);

Route::post('/pay', [PaymentController::class, 'index']);
Route::post('/pay-via-ajax', [PaymentController::class, 'payViaAjax']);

Route::post('/success', [PaymentController::class, 'success']);
Route::post('/fail', [PaymentController::class, 'fail']);
Route::post('/cancel', [PaymentController::class, 'cancel']);

Route::post('/ipn', [PaymentController::class, 'ipn']);
//SSLCOMMERZ END