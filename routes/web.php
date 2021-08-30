<?php

use App\Http\Controllers\SuperAdmin\FAQController;
use App\Http\Controllers\SuperAdmin\HomePagePartnerController;
use App\Http\Controllers\SuperAdmin\ProgramController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdmin\MainProgramController;

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
Route::get('/logout', [HomeController::class, 'logout'])->name('user.logout');

Route::prefix('/')->group(function () {
    Route::get('/info/{id}', [HomeController::class, 'may_bank'])->name('may.bank');
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/msd-live', [HomeController::class, 'msdLive'])->name('user.msdLive');
    Route::get('/program', [HomeController::class, 'program'])->name('program');
    Route::get('/pertandingan', [HomeController::class, 'pertandingan'])->name('pertandingan');
    Route::get('/khidmat', [HomeController::class, 'khidmat'])->name('khidmat');
    Route::get('/promotion', [HomeController::class, 'promotion'])->name('promotion');
    Route::get('/jom-kira', [HomeController::class, 'jom_kira'])->name('jom.kira');
    Route::get('/sertai-sekarang', [HomeController::class, 'sertai_sekarang'])->name('sertai.sekarang');
    Route::get('/rakan-korporat', [HomeController::class, 'partner'])->name('partner');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
});

// Routes For Users
Auth::routes();
Route::middleware('auth:user')->namespace('User')->group(function () {
    Route::post('step-1-from',[UserController::class, 'step1'])->name('step1.form');
    Route::post('step-2-from',[UserController::class, 'step2'])->name('step2.form');
    Route::post('step-3-from',[UserController::class, 'step3'])->name('step3.form');

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

    Route::prefix('home-page-partner')->group(function () {
        Route::get('/', [HomePagePartnerController::class, 'index'])->name('stars.homepage.index');
        Route::get('/show/{id}', [HomePagePartnerController::class, 'show'])->name('stars.homepage.show');
        Route::get('/edit/{id}', [HomePagePartnerController::class, 'edit'])->name('stars.homepage.edit');
        Route::post('/edit/{id}', [HomePagePartnerController::class, 'update'])->name('stars.homepage.edit');
        Route::get('/delete/{id}', [HomePagePartnerController::class, 'destroy'])->name('stars.homepage.delete');
        Route::get('/slider/delete/{id}', [HomePagePartnerController::class, 'slider_delete'])->name('stars.homepage.slide.delete');
        Route::get('/link/delete/{id}', [HomePagePartnerController::class, 'link_delete'])->name('stars.homepage.link.delete');
        Route::post('/slider/create', [HomePagePartnerController::class, 'slider_store'])->name('stars.slide.store');
        Route::post('/link/create', [HomePagePartnerController::class, 'link_store'])->name('stars.link.store');

    });


    Route::prefix('/faq/page')->group(function () {
        Route::get('/', [FAQController::class,'index'])->name('star.faq');
        Route::post('/', [FAQController::class,'store'])->name('star.faq');
    });


    Route::prefix('main-program')->group(function () {
        Route::get('/', [MainProgramController::class, 'index'])->name('star.MainDetail');
        Route::get('get-main-program', [MainProgramController::class, 'getMainProgram'])->name('star.getMainDetailAJAX');
        Route::post('store-main-program', [MainProgramController::class, 'store'])->name('star.storeMainDetail');
        Route::get('detail/{id}', [MainProgramController::class, 'show'])->name('star.detailMainDetail');
        Route::post('update/{id}', [MainProgramController::class, 'update'])->name('star.updateMainDetail');
        Route::get('delete/{id}', [MainProgramController::class, 'destroy'])->name('star.destroyMainDetail');
    });


    Route::prefix('user')->group(function () {
        Route::get('/', 'UsersController@index')->name('star.users');
        Route::get('getUsers', 'UsersController@getUsers')->name('star.getusersAJAX');
        Route::get('delete/{id}', 'UsersController@destroy')->name('star.destroyUser');

    });

    Route::get('program', 'UsersController@index')->name('star.programs');


    Route::get('programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('program/add', [ProgramController::class, 'create'])->name('programs.add');
    Route::post('program/add', [ProgramController::class, 'store'])->name('programs.add.post');
    Route::get('program/{id}/edit', [ProgramController::class, 'edit'])->name('programs.edit');
    Route::post('program/{id}/update', [ProgramController::class, 'update'])->name('programs.update');
    Route::get('program/{id}/delete', [ProgramController::class, 'destroy'])->name('programs.add.delete');

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
    Route::get('programs', [ProgramController::class, 'adminIndex'])->name('admin.programs.index');
    Route::get('edit/{id}/program', [ProgramController::class, 'adminEdit'])->name('admin.programs.edit');
    Route::post('update/{id}/program', [ProgramController::class, 'adminUpdate'])->name('admin.programs.update');

    Route::prefix('/faq/page')->group(function () {
        Route::get('/', [FAQController::class,'adminIndex'])->name('admin.faq');
        Route::post('/', [FAQController::class,'adminStore'])->name('admin.faq');
    });

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
