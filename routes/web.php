<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\Admin;
use App\Http\Controllers\admin\services\ServicesController;
use App\Http\Controllers\admin\promotions\PromotionsController;
use App\Http\Controllers\admin\service_video\ServiceVideoController;
use App\Http\Controllers\admin\sofin_promotions\SofinPromotionController;

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

Route::get('/test', function () {
    return view('pages.performance.app');
});

//auth
Route::get('/LoginPage', [AuthController::class, 'LoginPage'])->name('LoginPage');
Route::post('/login', [AuthController::class, 'Login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [Home::class, 'Index'])->name('Index');
Route::get('/branch', [Home::class, 'Branch'])->name('Branch');
Route::get('/contact', [Home::class, 'Contact'])->name('Contact');
Route::get('/objective', [Home::class, 'Objective'])->name('Objective');
Route::get('/performance', [Home::class, 'Performance'])->name('Performance');
Route::get('/websites', [Home::class, 'Websites'])->name('Websites');

Route::middleware(['auth', 'checklogin'])->group(function () {
    Route::get('/admin/page', [Admin::class, 'AdminIndex'])->name('AdminIndex');

    Route::get('/admin/services/web', [ServicesController::class, 'AdminServicesPage'])->name('AdminServicesPage');
    Route::post('/admin/services/web/create', [ServicesController::class, 'AdminServicesCreate'])->name('AdminServicesCreate');
    Route::put('/admin/services/web/update/{id}', [ServicesController::class, 'AdminServicesUpdate'])->name('AdminServicesUpdate');
    Route::delete('/admin/services/web/delete/{id}', [ServicesController::class, 'AdminServicesDelete'])->name('AdminServicesDelete');
    Route::get('/admin/services/web/detail/{id}', [ServicesController::class, 'AdminServicesDetail'])->name('AdminServicesDetail');

    Route::get('/admin/services/video', [ServiceVideoController::class, 'AdminServiceVideoPage'])->name('AdminServiceVideoPage');
    Route::post('/admin/services/video/create', [ServiceVideoController::class, 'AdminServiceVideoCreate'])->name('AdminServiceVideoCreate');
    Route::get('/admin/services/video/detail/{id}', [ServiceVideoController::class, 'AdminServiceVideoDetail'])->name('AdminServiceVideoDetail');
    Route::delete('/admin/services/video/delete/{id}', [ServiceVideoController::class, 'AdminServiceVideoDelete'])->name('AdminServiceVideoDelete');
    Route::put('/admin/services/video/update/{id}', [ServiceVideoController::class, 'AdminServiceVideoUpdate'])->name('AdminServiceVideoUpdate');

    Route::get('/admin/promotions', [PromotionsController::class, 'AdminPromotionsPage'])->name('AdminPromotionsPage');
    Route::post('/admin/promotions/create', [PromotionsController::class, 'AdminPromotionsCreate'])->name('AdminPromotionsCreate');
    Route::delete('/admin/promotions/delete/{id}', [PromotionsController::class, 'AdminPromotionsDelete'])->name('AdminPromotionsDelete');
    Route::put('/admin/promotions/update/{id}', [PromotionsController::class, 'AdminPromotionsUpdate'])->name('AdminPromotionsUpdate');
    Route::get('/admin/promotions/detail/{id}', [PromotionsController::class, 'AdminPromotionsDetail'])->name('AdminPromotionsDetail');

    Route::get('/admin/sofin_promotions', [SofinPromotionController::class, 'AdminSofinPromotionPage'])->name('AdminSofinPromotionPage');
    Route::post('/admin/sofin_promotions/create', [SofinPromotionController::class, 'AdminSofinPromotionsCreate'])->name('AdminSofinPromotionsCreate');
    Route::get('/admin/sofin_promotions/detail/{id}', [SofinPromotionController::class, 'AdminSofinPromotionsDetail'])->name('AdminSofinPromotionsDetail');
    Route::delete('/admin/sofin_promotions/delete/{id}', [SofinPromotionController::class, 'AdminSofinPromotionsDelete'])->name('AdminSofinPromotionsDelete');
    Route::put('/admin/sofin_promotions/update/{id}', [SofinPromotionController::class, 'AdminSofinPromotionsUpdate'])->name('AdminSofinPromotionsUpdate');
});
