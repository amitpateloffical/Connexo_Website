<?php
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicecategoryController;
use App\Http\Controllers\SolutioncategoryController;
use App\Http\Controllers\BlogcategoryController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\NotificationsController;
use App\Http\Controllers\frontend\EquipmentsController;
use App\Http\Controllers\frontend\ClientsController;
use App\Http\Controllers\frontend\GalleriesController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactsController;
use App\Http\Controllers\frontend\QuoteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminLoginController;
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
Route::get('trackwise12', function () {
    return view('frontend.trackwise12');
});
Route::get('complaince', function () {
    return view('frontend.compliance');
});

Route::get('trackwisedigital', function () {
    return view('frontend.trackwisedigital');
});
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('service/{id}',[ServicesController::class,'index'])->name('service');
Route::get('solution/{id}',[ServicesController::class,'solution'])->name('solution');
Route::get('/solution', function () {
    return view('frontend.solution');
});
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
Route::get('/career', function () {
    return view('frontend.career');
})->name('career');
Route::get('/service-single', function () {
    return view('frontend.service-single');
})->name('service-single');
Route::get('/schedule-demo', function () {
    return view('frontend.schedule-demo');
})->name('schedule-demo');
Route::get('/regulatory', function () {
    return view('frontend.ragulatory-complience');
})->name('regulatory');
Route::get('/profession', function () {
    return view('frontend.profession');
});
Route::get('/quality', function () {
    return view('frontend.quality');
});
Route::get('/audit', function () {
    return view('frontend.audit');
});
Route::get('/training', function () {
    return view('frontend.training');
});
Route::get('/risk-based', function () {
    return view('frontend.risk-based');
});
Route::get('/trackwise', function () {
    return view('frontend.trackwise');
});
Route::get('/trackwise-digital', function () {
    return view('frontend.trackwise-digital');
});
Route::get('/trackwise-3', function () {
    return view('frontend.trackwise-3');
});
Route::get('/quality-solution', function () {
    return view('frontend.quality-solution');
});
Route::get('/quality-view', function () {
    return view('frontend.quality-view');
});
Route::get('/audit-solution', function () {
    return view('frontend.audit-solution');
});
Route::get('/customer', function () {
    return view('frontend.customer');
})->name('customer');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('login',[AdminLoginController::class,'adminlogin'])->name('login');
Route::post('adminlogin',[AdminLoginController::class,'logincheck'])->name('adminlogin');
Route::get('logout',[AdminLoginController::class,'logout'])->name('logout');
Route::resource('ad-servicecategory',ServicecategoryController::class)->middleware('auth');
Route::resource('ad-solutioncategory',SolutioncategoryController::class)->middleware('auth');

Route::resource('ad-blogcategory',BlogcategoryController::class)->middleware('auth');
Route::resource('ad-service',ServiceController::class)->middleware('auth');
Route::resource('ad-equipment',EquipmentController::class)->middleware('auth');
Route::resource('ad-industry',IndustryController::class)->middleware('auth');
Route::resource('ad-gallery',GalleryController::class)->middleware('auth');
Route::resource('ad-client',ClientController::class)->middleware('auth');
Route::resource('ad-notification',NotificationController::class)->middleware('auth');
Route::resource('ad-feedback',FeedbackController::class)->middleware('auth');
Route::resource('allcontact',ContactController::class);
Route::post('expert', [ContactsController::class, 'expert'])->name('expert');
Route::post('career-form', [ContactsController::class, 'career'])->name('career-form');
Route::get('serviceDetail/{id}', [ServicesController::class, 'serviceDetail'])->name('service.detail');

// Route::get('ad-contact', [ContactController::class,'admincontactindex'])->name('cont');
// Route::get('contactdestroy/{id}', [ContactController::class,'contactdestroy'])->name('contactdestroy');
Route::get('change-password', [AdminLoginController::class, 'changePassword'])->name('change.password.form');
Route::post('change-password', [AdminLoginController::class, 'changPasswordStore'])->name('change.password');
Route::resource('getquote',QuoteController::class)->middleware('auth');
