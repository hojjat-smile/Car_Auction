<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Web\ContactUsController as WebContactUsController;
use App\Http\Controllers\Admin\InfoAboutUsController;

use App\Http\Controllers\Admin\PackageManagementController;
use App\Http\Controllers\Admin\RulesController;
use App\Http\Controllers\Admin\TransactionManagementController;
use App\Http\Controllers\User\AdsController as UserAdsController;
use App\Http\Controllers\admin\AdsController as AdminAdsController;
use App\Http\Controllers\User\AuctionController as UserAuctionController;
use App\Http\Controllers\Admin\AuctionController as AdminAuctionController;
use App\Http\Controllers\User\FavoriteController;
use App\Http\Controllers\User\MembershipController;
use App\Http\Controllers\Admin\MembershipController as AdminMembershipController;
use App\Http\Controllers\User\OrdersController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\Web\CarsListController;
use App\Http\Controllers\Web\FilterSearchController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Web\SinglePageController;
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
    Route::get('/single-page/{adsId}', [SinglePageController::class, 'singlePage'])->name('single-page');
    Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::post('/contact-send-message', [WebContactUsController::class, 'contactSendMessage'])->name('contact-send-message');
    Route::get('/rules', [IndexController::class, 'rules'])->name('rules');
    Route::get('/vehicle-search', [IndexController::class, 'vehicle_search'])->name('vehicle_search');
    Route::get('/how-it-works', [IndexController::class, 'workings'])->name('how-works');
//  Route::get('/roles', [IndexController::class, 'roles'])->name('roles'); is there a need for authentication page??????


    Route::get('/find-car-view', [FilterSearchController::class, 'findCarView'])->name('find-car-view');
    Route::post('/find-car', [FilterSearchController::class, 'findCar'])->name('find-car');
    Route::get('/search', [IndexController::class, 'search'])->name('search');

//    Route::post('/search-car', [IndexController::class, 'searchCar'])->name('search-car');

    Route::get('/category-list/{itemId}/{type}', [CarsListController::class, 'categoryList'])->name('category-list');
    Route::get('/car-type-list/{itemId}/{type}', [CarsListController::class, 'carTypeList'])->name('car-type-list');
    Route::get('/damage-list/{itemId}/{type}', [CarsListController::class, 'damageList'])->name('damage-list');

});

Route::prefix('user-panel')->name('user.')->middleware('auth', 'checkUser')->group(function () {

    //index
    Route::get('/dashboard', [UserIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('/order-new/{itemId}', [OrdersController::class, 'orderNew'])->name('order-new');

    //membership
    Route::get('/membership', [MembershipController::class, 'membership'])->name('membership');


    //auction
    Route::get('/my-auction', [UserAuctionController::class, 'myAuction'])->name('my-auction');
    Route::get('/add-auction', [UserAuctionController::class, 'addAuction'])->name('add-auction');
    Route::post('/add-auction-post', [UserAuctionController::class, 'addAuctionPost'])->name('add-auction-post');
    Route::get('/edit-auction/{itemId}', [UserAuctionController::class, 'editAuction'])->name('edit-auction');
    Route::post('/edit-auction-post/{itemId}', [UserAuctionController::class, 'editAuctionPost'])->name('edit-auction-post');
    Route::get('/delete-auction/{itemId}', [UserAuctionController::class, 'deleteAuction'])->name('delete-auction');
    Route::get('/auction-image-delete/{imageId}/{adsId}', [UserAuctionController::class, 'auctionImageDelete'])->name('auction-image-delete');
    Route::get('/auction-image-set-default/{imageId}/{adsId}', [UserAuctionController::class, 'auctionImageSetDefault'])->name('auction-image-set-default');


    // add ads
    Route::get('/my-ads', [UserAdsController::class, 'myAds'])->name('my-ads');
    Route::get('/add-ads', [UserAdsController::class, 'addAds'])->name('add-ads');
    Route::post('/add-ads-post', [UserAdsController::class, 'addAdsPost'])->name('add-ads-post');
    Route::get('/edit-ads/{adId}', [UserAdsController::class, 'editAds'])->name('edit-ads');
    Route::get('/delete-ads/{adId}', [UserAdsController::class, 'deleteAds'])->name('delete-ads');
    Route::post('/ads-update/{adId}', [UserAdsController::class, 'editAdsUpdate'])->name('ads-update');
    Route::get('/ads-image-delete/{imageId}/{adsId}', [UserAdsController::class, 'adsImageDelete'])->name('ads-image-delete');
    Route::get('/ads-image-set-default/{imageId}/{adsId}', [UserAdsController::class, 'adsImageSetDefault'])->name('ads-image-set-default');
    //profile
    Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'profileUpdate'])->name('profile-update');

    //favorite
    Route::get('/my-favorite', [FavoriteController::class, 'myFavorite'])->name('my-favorite');
    Route::get('/add-favorite/{adsId}', [FavoriteController::class, 'addFavorite'])->name('add-favorite');
    Route::get('/delete-favorite/{adsId}', [FavoriteController::class, 'deleteFavorite'])->name('delete-favorite');

    Route::post('/bid-now-submit/{ads}', [FavoriteController::class, 'bidNowSubmit'])->name('bid-now-submit');


});

Route::prefix('admin-panel')->name('admin.')->middleware('auth', 'checkAdmin')->group(function () {


    Route::get('/dashboard', [AdminIndexController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/publish-ads/{adId}', [AdminIndexController::class, 'publishAds'])->name('dashboard-publish-ads');
    Route::get('/package-management', [PackageManagementController::class, 'packageManagement'])->name('package-management');

    //membership
    Route::get('/membership', [AdminMembershipController::class, 'membership'])->name('membership');
    Route::get('/memberships-add', [AdminMembershipController::class, 'membershipsAdd'])->name('memberships-add');
    Route::post('/memberships-add-post', [AdminMembershipController::class, 'membershipsAddPost'])->name('memberships-add-post');
    Route::get('/memberships-edit/{itemId}', [AdminMembershipController::class, 'membershipsEdit'])->name('memberships-edit');
    Route::post('/memberships-edit-post/{itemId}', [AdminMembershipController::class, 'membershipsEditPost'])->name('memberships-edit-post');
    Route::get('/memberships-delete/{itemId}', [AdminMembershipController::class, 'membershipsDelete'])->name('memberships-delete');


    //transactions
    Route::get('/trans-manage', [TransactionManagementController::class, 'transManage'])->name('trans-manage');


    //auction
    Route::get('/my-auction', [AdminAuctionController::class, 'myAuction'])->name('my-auction');
    Route::get('/add-auction', [AdminAuctionController::class, 'addAuction'])->name('add-auction');
    Route::post('/add-auction-post', [AdminAuctionController::class, 'addAuctionPost'])->name('add-auction-post');
    Route::get('/edit-auction/{itemId}', [AdminAuctionController::class, 'editAuction'])->name('edit-auction');
    Route::post('/edit-auction-post/{itemId}', [AdminAuctionController::class, 'editAuctionPost'])->name('edit-auction-post');
    Route::get('/delete-auction/{itemId}', [AdminAuctionController::class, 'deleteAuction'])->name('delete-auction');
    Route::get('/view-auction/{adId}', [AdminAuctionController::class, 'viewAuction'])->name('view-auction');
    Route::get('/publish-auction/{adId}', [AdminAuctionController::class, 'publishAuction'])->name('publish-auction');
    Route::get('/auction-image-delete/{imageId}/{adsId}', [AdminAuctionController::class, 'auctionImageDelete'])->name('auction-image-delete');
    Route::get('/auction-image-set-default/{imageId}/{adsId}', [AdminAuctionController::class, 'auctionImageSetDefault'])->name('auction-image-set-default');



    //ads
    Route::get('/ad-management', [AdminAdsController::class, 'adManagement'])->name('ad-management');
    Route::get('/edit-ads/{adId}', [AdminAdsController::class, 'editAds'])->name('edit-ads');
    Route::post('/ads-update/{adId}', [AdminAdsController::class, 'editAdsUpdate'])->name('ads-update');
    Route::get('/add-ads/', [AdminAdsController::class, 'addAdsView'])->name('add-ads');
    Route::post('/add-ads', [AdminAdsController::class, 'addAdsUpdate'])->name('add-ads-update');
    Route::get('/delete-ads/{adId}', [AdminAdsController::class, 'deleteAds'])->name('delete-ads');
    Route::get('/view-ads/{adId}', [AdminAdsController::class, 'viewAds'])->name('view-ads');
    Route::get('/publish-ads/{adId}', [AdminAdsController::class, 'publishAds'])->name('publish-ads');
    Route::get('/ads-image-delete/{imageId}/{adsId}', [AdminAdsController::class, 'adsImageDelete'])->name('ads-image-delete');
    Route::get('/ads-image-set-default/{imageId}/{adsId}', [AdminAdsController::class, 'adsImageSetDefault'])->name('ads-image-set-default');


    //users
    Route::get('/user-management', [UsersController::class, 'userManagement'])->name('user-management');
    Route::get('/user-edit/{userId}', [UsersController::class, 'editUser'])->name('user-edit');
    Route::post('/user-edit/saved/{userId}', [UsersController::class, 'update'])->name('updated');
    Route::get('/user-active/{itemId}', [UsersController::class, 'userActive'])->name('user-active');
    Route::get('/user-deleted/{itemId}', [UsersController::class, 'userDeleted'])->name('user-deleted');

    //Profile
    Route::get('/profile', [AdminProfileController::class, 'profile'])->name('profile');
    Route::post('/profile', [AdminProfileController::class, 'profileUpdate'])->name('profile-update');

    //rules
    Route::get('/rules', [RulesController::class, 'rules'])->name('rules');
    Route::post('/rules-post/{itemId}', [RulesController::class, 'rulesPost'])->name('rules-post');

    //aboutUs
    Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about-us');
    Route::post('/about-us-update/{itemId}', [AboutUsController::class, 'aboutUsEdit'])->name('about-us-update');


    //contact
    Route::get('/contact-us', [ContactUsController::class, 'contactUs'])->name('contact-us');
    Route::get('/contact-us-reply/{itemId}', [ContactUsController::class, 'contactUsReply'])->name('contact-us-reply');
    Route::post('/contact-us-reply/{itemId}', [ContactUsController::class, 'reply'])->name('contact-us-reply');


    Route::get('/info-about-us', [InfoAboutUsController::class, 'info'])->name('info-about-us');
    Route::post('/info-about-us/{itemId}', [InfoAboutUsController::class, 'InfoPost'])->name('info-about-us-post');


});

