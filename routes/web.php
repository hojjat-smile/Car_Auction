<?php

use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
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

Route::name('web.')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/single-page', [IndexController::class, 'singlePage'])->name('single-page');
    Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::get('/roles', [IndexController::class, 'roles'])->name('roles');

    //register
    Route::get('/register', [IndexController::class, 'registerPage'])->name('register');
    Route::post('/register', [IndexController::class, 'register'])->name('register');

    //login
    Route::get('/login', [IndexController::class, 'loginPage'])->name('login');
    Route::post('/login', [IndexController::class, 'login'])->name('login');

});

Route::prefix('user-panel')->name('user.')->group(function () {

    Route::get('/dashboard', [UserIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/ad-list', [UserIndexController::class, 'adList'])->name('ad-list');
    Route::get('/add-car', [UserIndexController::class, 'addCar'])->name('add-car');
    Route::post('/add-car-post', [UserIndexController::class, 'addCarPost'])->name('add-car-post');

    Route::get('/my-ads', [UserIndexController::class, 'myAds'])->name('my-ads');
    Route::get('/edit-ads/{adId}', [UserIndexController::class, 'editAds'])->name('edit-ads');
    Route::post('/ads-update/{adId}', [UserIndexController::class, 'editAdsUpdate'])->name('ads-update');


    Route::get('/profile', [UserIndexController::class, 'profile'])->name('profile');
    Route::post('/profile/{userId}', [UserIndexController::class, 'profileUpdate'])->name('profile-update');

    Route::get('/membership', [UserIndexController::class, 'membership'])->name('membership');
    Route::get('/my-favorite', [UserIndexController::class, 'myFavorite'])->name('my-favorite');


});

Route::prefix('admin-panel')->name('admin.')->group(function () {


    Route::get('/dashboard', [AdminIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/user-management', [AdminIndexController::class, 'userManagement'])->name('user-management');
    Route::get('/package-management', [AdminIndexController::class, 'packageManagement'])->name('package-management');
    Route::get('/settings', [AdminIndexController::class, 'settings'])->name('settings');
    Route::get('/membership', [AdminIndexController::class, 'membership'])->name('membership');
    Route::get('/trans-manage', [AdminIndexController::class, 'transManage'])->name('trans-manage');


    Route::get('/ad-management', [AdminIndexController::class, 'adManagement'])->name('ad-management');
    Route::get('/edit-ads/{adId}', [AdminIndexController::class, 'editAds'])->name('edit-ads');
    Route::post('/ads-update/{adId}', [AdminIndexController::class, 'editAdsUpdate'])->name('ads-update');

    Route::get('/user-management/user-edit/{userId}', [AdminIndexController::class, 'edit'])->name('user-edit');
    Route::post('/user-management/user-edit/saved/{itemId}', [AdminIndexController::class, 'update'])->name('updated');

});

