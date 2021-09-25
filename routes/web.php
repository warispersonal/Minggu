<?php

use App\Http\Controllers\Auth\User\LoginController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\SuperAdmin\FAQController;
use App\Http\Controllers\SuperAdmin\HomePagePartnerController;
use App\Http\Controllers\SuperAdmin\LuckyDrawController;
use App\Http\Controllers\SuperAdmin\ProgramController;
use App\Http\Controllers\SuperAdmin\RinggitEmasController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
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

Route::get('/mailsend', [\App\Http\Controllers\Auth\User\RegisterController::class, 'send_mail'])->name("send_mail");

Route::get('/logoutAfterForgotPassword',[LoginController::class,'logoutAfterForgotPassword'])->name('logoutAfterForgotPassword');
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
    Route::get('/live-trivia', [HomeController::class, 'liveTrivia'])->name('liveTrivia');
    Route::get('/cabutan-bertuah', [HomeController::class, 'cabutanBertuah'])->name('cabutanBertuah');
    Route::get('/draw-118', [HomeController::class, 'draw'])->name('draw');

});

// Routes For Users
Auth::routes();
Route::middleware('auth:user')->namespace('User')->group(function () {
    Route::post('step-1-from',[UserController::class, 'step1'])->name('step1.form');
    Route::post('step-2-from',[UserController::class, 'step2'])->name('step2.form');
    Route::post('step-3-from',[UserController::class, 'step3'])->name('step3.form');

});
Route::post('/user-login', [LoginController::class, 'user_login'])->name("user_login");
Route::post('/user-register', [\App\Http\Controllers\Auth\User\RegisterController::class, 'user_register'])->name("user_register");


// Routes For Super Admin
Route::prefix('star')->namespace('Auth\SuperAdmin')->group(function () {
    Route::get('/', 'LoginController@showLoginForm');
    Route::get('login', 'LoginController@showLoginForm')->name('star.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('star.logout');
});

Route::prefix('star')->middleware('auth:superAdmin')->namespace('SuperAdmin')->group(function () {
    Route::get('approve-partner/{id}/{status}', [HomePagePartnerController::class, 'approvePartner'])->name('partner.approvePartner');

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
        Route::get('/{id?}', [HomePagePartnerController::class, 'index'])->name('stars.homepage.index');
        Route::get('/show/{id}', [HomePagePartnerController::class, 'show'])->name('stars.homepage.show');
        Route::get('/edit/{id}', [HomePagePartnerController::class, 'edit'])->name('stars.homepage.edit');
        Route::post('/edit/{id}', [HomePagePartnerController::class, 'update'])->name('stars.homepage.edit');
        Route::get('/delete/{id}', [HomePagePartnerController::class, 'destroy'])->name('stars.homepage.delete');
        Route::get('/slider/delete/{id}', [HomePagePartnerController::class, 'slider_delete'])->name('stars.homepage.slide.delete');
        Route::get('/slider/{id}/edit', [HomePagePartnerController::class, 'slider_edit'])->name('stars.homepage.slide.edit');
        Route::get('/link/delete/{id}', [HomePagePartnerController::class, 'link_delete'])->name('stars.homepage.link.delete');
        Route::get('/promotion/{id}/edit', [HomePagePartnerController::class, 'promotion_edit'])->name('stars.promotion.edit');
        Route::get('/link/{id}/edit', [HomePagePartnerController::class, 'link_edit'])->name('stars.link.edit');
        Route::get('/promotion/delete/{id}', [HomePagePartnerController::class, 'promotion_delete'])->name('stars.promotion.delete');
        Route::post('/slider/create', [HomePagePartnerController::class, 'slider_store'])->name('stars.slide.store');
        Route::post('/slider/{id}/update', [HomePagePartnerController::class, 'slider_update'])->name('stars.slide.update');
        Route::post('/promotion/create', [HomePagePartnerController::class, 'promotion_store'])->name('stars.promotion.store');
        Route::post('/promotion/{id}/update', [HomePagePartnerController::class, 'promotion_update'])->name('stars.promotion.update');
        Route::post('/link/{id}/update', [HomePagePartnerController::class, 'link_update'])->name('stars.link.update');
        Route::post('/link/create', [HomePagePartnerController::class, 'link_store'])->name('stars.link.store');
        Route::get('/view-changes/{id}', [HomePagePartnerController::class, 'showChanges'])->name('stars.homepage.showChanges');

        Route::get('/slider-approve/{id}/{status}', [HomePagePartnerController::class, 'sliderApprove'])->name('stars.homepage.sliderApprove');
        Route::get('/promotion-approve/{id}/{status}', [HomePagePartnerController::class, 'promotionApprove'])->name('stars.homepage.promotionApprove');
        Route::get('/link-approve/{id}/{status}', [HomePagePartnerController::class, 'linkApprove'])->name('stars.homepage.linkApprove');

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
        Route::get('get-Daily-Winner-ajax', 'CompititionController@getDailyWinnerAJAX')->name('star.getDailyWinnerAJAX');

    });

    Route::get('program', 'UsersController@index')->name('star.programs');

    Route::get('view-submission', [SuperAdminController::class, 'viewSubmission'])->name('star.viewSubmission');
    Route::get('view-submission-ajax',[SuperAdminController::class, 'viewSubmissionAJAX'])->name('star.viewSubmissionAJAX');



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

    Route::prefix('competition')->name('star.compitition.')->group(function () {
        Route::get('filter', 'CompititionController@filter')->name('filter');
        Route::post('upload-filter', 'CompititionController@uploadFilter')->name('uploadFilter');
        Route::get('getFilters', 'CompititionController@getFilters')->name('getfiltersAJAX');
        Route::get('destroy-filter/{id}', 'CompititionController@destroyFilter')->name('destroyFilter');

        Route::get('daily-winner', 'CompititionController@dailyWinner')->name('dailywinner');
        Route::get('get-daily-winner', 'CompititionController@getDailyWinner')->name('getDailyWinner');
        Route::post('generate-daily-winner-list', 'CompititionController@generateDailyWinnerList')->name('generate.daily.winner.list');
        Route::get('winner-list', 'CompititionController@todayWinnerList')->name('today.winner.list');

        Route::get('generate-ringgit-emas', [RinggitEmasController::class, 'generateRinggitEmasWinnerList'])->name('generateRinggitEmas');
        Route::get('ringgit-emas', [RinggitEmasController::class, 'ringgitEmas'])->name('ringgitEmasWinner');
        Route::get('get-ringgit-emas-ajax', [RinggitEmasController::class, 'getRinggitEmasWinnerAJAX'])->name('getRinggitEmasWinnerAJAX');

        Route::get('generate-lucky', [LuckyDrawController::class, 'generateLuckyDraw'])->name('getLuckyDrawWinnerList');
        Route::get('get-generate-lucky-ajax', [LuckyDrawController::class, 'generateLuckyDrawAJAX'])->name('getLuckyDrawWinnerListAJAX');
        Route::get('generate-lucky-draw', [LuckyDrawController::class, 'generateLuckyDrawWinnerList'])->name('generateLuckyDrawWinnerList');



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
    Route::get('dashboard', [ProgramController::class, 'adminIndex'])->name('admin.dashboard');
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
    Route::get('dashboard', [PartnerController::class, 'dashboard'])->name('partner.dashboard');
    Route::get('/promotion', [PartnerController::class, 'showPromotions'])->name('partner.show.promotion');
    Route::post('/promotion/create', [PartnerController::class, 'promotion_store'])->name('partner.promotion.store');
    Route::get('/promotion/delete/{id}', [PartnerController::class, 'promotion_delete'])->name('partner.promotion.delete');
    Route::get('/info', [PartnerController::class, 'editUniqueInfo'])->name('partner.unique.info');
    Route::post('/info', [PartnerController::class, 'updateUniqueInfo'])->name('partner.unique.info');

    Route::get('/button', [PartnerController::class, 'showButtons'])->name('partner.show.button');
    Route::post('/button/create', [PartnerController::class, 'button_store'])->name('partner.button.store');
    Route::get('/button/delete/{id}', [PartnerController::class, 'button_delete'])->name('partner.button.delete');

    Route::get('/slider', [PartnerController::class, 'showSliders'])->name('partner.show.slider');
    Route::post('/slider/create', [PartnerController::class, 'slider_store'])->name('partner.slider.store');
    Route::get('/slider/delete/{id}', [PartnerController::class, 'slider_delete'])->name('partner.slider.delete');


});

// Route For Setting Language
Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'bm'])) {
        abort(400);
    }
    session(['applang' => $locale]);
    // After Setting Local Redirect Back to Home Page
    return redirect()->back()->with('action','language')->with('language_code',$locale);

})->name('localization');
