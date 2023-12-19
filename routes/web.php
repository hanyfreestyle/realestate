<?php

use App\Http\Controllers\admin\DeveloperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\web\PageController;
use App\Http\Controllers\web\WebBlogController;
use App\Http\Controllers\web\WebCompoundController;
use App\Http\Controllers\web\WebDeveloperController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Auth::viaRemember();
//Auth::logoutOtherDevices('password');


Route::group(['middleware' => ['auth','status']], function() {
    Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

        Route::get('/', [PageController::class, 'index'])->name('page_index');

        Route::get('/developers', [WebDeveloperController::class, 'DevelopersList'])->name('page_developers');
        Route::get('/developers/{slug}', [WebDeveloperController::class, 'DeveloperView'])->name('page_developer_view');

        Route::get('/blog', [WebBlogController::class, 'BlogList'])->name('page_blog');
        Route::get('/blog/{catSlug}', [WebBlogController::class, 'BlogCatList'])->name('page_blogCatList');
        Route::get('/blog/{catSlug}/{postSlug}', [WebBlogController::class, 'BlogView'])->name('page_blogView');

        Route::get('/compounds', [WebCompoundController::class, 'CompoundsList'])->name('page_compounds');
        Route::get('/for-sale', [WebCompoundController::class, 'ForSaleList'])->name('page_for_sale');

        Route::get('/{listingid}', [PageController::class, 'ListView'])
            ->name('page_ListView')->where('listingid','^(\d+)+[^\/]+$');

        Route::get('{slug}', [PageController::class, 'LocationView'])
            ->name('page_locationView')->where('slug', '(.*)');

    });
});




