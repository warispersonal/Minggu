<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\HomeController;

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

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/msd-live', [HomeController::class, 'msdLive'])->name('user.msdLive');
});

// Routes For Users
Auth::routes();
Route::middleware('auth:user')->namespace('User')->group(function () {

});


// Routes For Super Admin
Route::prefix('star')->namespace('Auth\SuperAdmin')->group(function () {
    Route::get('/', 'LoginController@showLoginForm');
    Route::get('login', 'LoginController@showLoginForm')->name('star.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('star.logout');
});

Route::prefix('star')->middleware('auth:superAdmin')->namespace('SuperAdmin')->group(function () {
    Route::get('dashboard', 'SuperAdminController@index')->name('star.dashboard');

    Route::prefix('admin')->group(function () {
        Route::get('/', 'AdminsController@index')->name('star.admins');
        Route::get('getAdmins', 'AdminsController@getAdmins')->name('star.getadminsAJAX');
        Route::post('storeAdmin', 'AdminsController@store')->name('star.storeAdmin');
        Route::get('detail/{id}', 'AdminsController@show')->name('star.detailAdmin');
        Route::post('update/{id}', 'AdminsController@update')->name('star.updateAdmin');
        Route::get('delete/{id}', 'AdminsController@destroy')->name('star.destroyAdmin');
    });


    Route::prefix('partner')->group(function () {
        Route::get('/', 'PartnersController@index')->name('star.partners');
        Route::get('getPartners', 'PartnersController@getPartners')->name('star.getpartnersAJAX');
        Route::post('storePartner', 'PartnersController@store')->name('star.storePartner');
        Route::get('detail/{id}', 'PartnersController@show')->name('star.detailPartner');
        Route::post('update/{id}', 'PartnersController@update')->name('star.updatePartner');
        Route::get('delete/{id}', 'PartnersController@destroy')->name('star.destroyPartner');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', 'UsersController@index')->name('star.users');
        Route::get('getUsers', 'UsersController@getUsers')->name('star.getusersAJAX');
        Route::get('delete/{id}', 'UsersController@destroy')->name('star.destroyUser');

    });


    Route::get('programs', 'UsersController@index')->name('star.programs');

    Route::prefix('content')->group(function () {
        Route::get('menu', 'ContentController@menu')->name('star.content.menu');
        Route::get('theme', 'ContentController@theme')->name('star.content.theme');
        Route::post('theme-edit', 'ContentController@themeEdit')->name('star.content.themeEdit');
        Route::get('tonton-msd-live', 'ContentController@tonTonVideo')->name('star.content.tonton');
        Route::post('tonton-msd-live-save', 'ContentController@tonTonVideoSave')->name('star.content.tontonlink');
    });

    Route::prefix('compitition')->name('star.compitition.')->group(function () {
        Route::get('filter', 'CompititionController@filter')->name('filter');
        Route::post('upload-filter', 'CompititionController@uploadFilter')->name('uploadFilter');
        Route::get('getFilters', 'CompititionController@getFilters')->name('getfiltersAJAX');
        Route::get('destroy-filter/{id}', 'CompititionController@destroyFilter')->name('destroyFilter');

        Route::get('daily-winner', 'CompititionController@dailyWinner')->name('dailywinner');
        Route::get('get-daily-winner', 'CompititionController@getDailyWinner')->name('getDailyWinner');

    });
});


// Routes For Admin
Route::prefix('admin')->namespace('Auth\Admin')->group(function () {
    Route::get('/', 'LoginController@showLoginForm');
    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');

});

Route::prefix('admin')->middleware('auth:admin')->namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
});

// Routes For Partners
Route::prefix('partner')->namespace('Auth\Partner')->group(function () {
    Route::get('/', 'LoginController@showLoginForm');
    Route::get('login', 'LoginController@showLoginForm')->name('partner.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('partner.logout');

});

Route::prefix('partner')->middleware('auth:partner')->namespace('Partner')->group(function () {
    Route::get('dashboard', 'PartnerController@index')->name('partner.dashboard');
});

// Route For Setting Language
Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'bm'])) {
        abort(400);
    }
    session(['applang' => $locale]);
    // After Setting Local Redirect Back to Home Page
    return redirect()->back();

})->name('localization');
