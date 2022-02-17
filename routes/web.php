<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['admin']], function () {

    Route::get('home', 'HomeController@handleAdmin')->name('route');

    // Route::get('admins/list', 'UserController@allAdminList')->name('allAdminList');
    // Route::get('users/list', 'UserController@allUserList')->name('allUserList');

    Route::get('admins/list',[UserController::class, 'allAdminList'])->name('allAdminList');
    Route::get('users/list',[UserController::class, 'allUserList'])->name('allUserList');

});