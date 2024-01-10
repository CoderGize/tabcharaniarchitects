<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandeeController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\ExpertiseController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LandingController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/', [CmsController::class, 'dash']);

    // {{ User }}
    Route::get('/show_user', [UserController::class, 'show_user']);
    Route::get('/update_user/{id}', [UserController::class, 'update_user']);
    Route::post('/update_user_confirm/{id}', [UserController::class, 'update_user_confirm']);
    Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);

    // {{ Social }}
    Route::get('/show_social',[SocialController::class,'show_social']);
    Route::post('/update_social_confirm/{id}',[SocialController::class,'update_social_confirm']);
    Route::get('/update_social/{id}',[SocialController::class,'update_social']);

    // {{ About }}
    Route::get('/show_about',[AboutController::class,'show_about']);
    Route::post('/update_about/{id}',[AboutController::class,'update_about']);

    // {{ Landing }}
    Route::get('/show_landing',[LandingController::class,'show_landing']);
    Route::post('/update_landing/{id}',[LandingController::class,'update_landing']);

    //{{ Partner }}
    Route::get('/show_partner', [PartnerController::class, 'show_partner']);
    Route::post('/add_partner', [PartnerController::class, 'add_partner']);
    // Route::post('/update_partner/{id}',[PartnerController::class,'update_partner']);
    Route::get('/delete_partner/{id}', [PartnerController::class, 'delete_partner']);


    //{{ Expertise }}
    Route::get('/show_expertise', [ExpertiseController::class, 'show_expertise']);
    Route::post('/add_expertise', [ExpertiseController::class, 'add_expertise']);
    Route::post('/update_expertise/{id}',[ExpertiseController::class,'update_expertise']);
    Route::get('/delete_expertise/{id}', [ExpertiseController::class, 'delete_expertise']);

    //{{ Brandee }}
    Route::get('/show_brandee', [BrandeeController::class, 'show_brandee']);
    Route::post('/add_brandee', [BrandeeController::class, 'add_brandee']);
    Route::post('/update_brandee/{id}',[BrandeeController::class,'update_brandee']);
    Route::get('/delete_brandee/{id}', [BrandeeController::class, 'delete_brandee']);


    //{{ Blog }}
    Route::get('/show_blog', [BlogController::class, 'show_blog']);
    Route::post('/add_blog', [BlogController::class, 'add_blog']);
    Route::post('/update_blog/{id}',[BlogController::class,'update_blog']);
    Route::get('/delete_blog/{id}', [BlogController::class, 'delete_blog']);

    //{{ Portfolio }}
    Route::get('/show_portfolio', [PortfolioController::class, 'show_portfolio']);
    Route::post('/add_portfolio', [PortfolioController::class, 'add_portfolio']);
    Route::post('/update_portfolio/{id}',[PortfolioController::class,'update_portfolio']);
    Route::get('/delete_portfolio/{id}', [PortfolioController::class, 'delete_portfolio']);

    //{{ Gallery }}
    Route::get('/show_gallery/{id}', [GalleryController::class, 'show_gallery']);
    Route::post('/add_gallery/{id}', [GalleryController::class, 'add_gallery']);
    // Route::post('/update_gallery/{id}',[galleryController::class,'update_gallery']);
    // Route::get('/delete_gallery/{id}', [galleryController::class, 'delete_gallery']);
    Route::get('gallery/show_all_gallery/{sectionId}', [GalleryController::class, 'show_all_gallery'])->name('show_all_gallery');

});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
