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
    Route::get('/single-page/{adsId}', [IndexController::class, 'singlePage'])->name('single-page');
    Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::get('/roles', [IndexController::class, 'roles'])->name('roles');
    Route::get('/vehicle-search', [IndexController::class, 'vehicle_search'])->name('vehicle_search');
    Route::get('/how-it-works', [IndexController::class, 'workings'])->name('how-works');
//  Route::get('/roles', [IndexController::class, 'roles'])->name('roles'); is there a need for authentication page??????


    Route::get('/find-car', [IndexController::class, 'findCar'])->name('find-car');




});

Route::prefix('user-panel')->name('user.')->group(function () {

    Route::get('/dashboard', [UserIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/ad-list', [UserIndexController::class, 'adList'])->name('ad-list');

    Route::get('/add-ads', [UserIndexController::class, 'addAds'])->name('add-ads');
    Route::post('/add-ads-post/{userId}', [UserIndexController::class, 'addAdsPost'])->name('add-ads-post');
    Route::get('/my-ads', [UserIndexController::class, 'myAds'])->name('my-ads');
    Route::get('/edit-ads/{adId}', [UserIndexController::class, 'editAds'])->name('edit-ads');
    Route::get('/delete-ads/{adId}', [UserIndexController::class, 'deleteAds'])->name('delete-ads');
    Route::post('/ads-update/{adId}', [UserIndexController::class, 'editAdsUpdate'])->name('ads-update');


    Route::get('/profile', [UserIndexController::class, 'profile'])->name('profile');
    Route::post('/profile/{userId}', [UserIndexController::class, 'profileUpdate'])->name('profile-update');

    Route::get('/membership', [UserIndexController::class, 'membership'])->name('membership');
    Route::get('/my-favorite', [UserIndexController::class, 'myFavorite'])->name('my-favorite');


});

Route::prefix('admin-panel')->name('admin.')->group(function () {


    Route::get('/dashboard', [AdminIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/package-management', [AdminIndexController::class, 'packageManagement'])->name('package-management');
    Route::get('/settings', [AdminIndexController::class, 'settings'])->name('settings');
    Route::get('/membership', [AdminIndexController::class, 'membership'])->name('membership');
    Route::get('/trans-manage', [AdminIndexController::class, 'transManage'])->name('trans-manage');


    Route::get('/ad-management', [AdminIndexController::class, 'adManagement'])->name('ad-management');
    Route::get('/edit-ads/{adId}', [AdminIndexController::class, 'editAds'])->name('edit-ads');
    Route::post('/ads-update/{adId}', [AdminIndexController::class, 'editAdsUpdate'])->name('ads-update');
    Route::get('/add-ads/', [AdminIndexController::class, 'addAdsView'])->name('add-ads');
    Route::post('/add-ads/{adId}', [AdminIndexController::class, 'addAdsUpdate'])->name('add-ads-update');
    Route::get('/delete-ads/{adId}', [AdminIndexController::class, 'deleteAds'])->name('delete-ads');
    Route::get('/view-ads-ads/{adId}', [AdminIndexController::class, 'viewAds'])->name('view-ads');
    Route::get('/publish-ads/{adId}', [AdminIndexController::class, 'publishAds'])->name('publish-ads');

    Route::get('/user-management', [AdminIndexController::class, 'userManagement'])->name('user-management');
    Route::get('/user-management/user-edit/{userId}', [AdminIndexController::class, 'edit'])->name('user-edit');
    Route::post('/user-management/user-edit/saved/{itemId}', [AdminIndexController::class, 'update'])->name('updated');
    Route::get('/user-active/{itemId}', [AdminIndexController::class, 'userActive'])->name('user-active');
    Route::get('/user-deleted/{itemId}', [AdminIndexController::class, 'userDeleted'])->name('user-deleted');

});

