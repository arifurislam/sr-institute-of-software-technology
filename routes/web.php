<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WebsiteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/services', [WebsiteController::class, 'services']);
Route::get('/seip/registration', [WebsiteController::class, 'contact']);
Route::post('/seip/registrations/stores', [WebsiteController::class, 'store']);
Route::get('/research', [WebsiteController::class, 'research']);
Route::get('/notice', [WebsiteController::class, 'notice']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['prefix'=> 'dashboard',  'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/contact/show/{id}', [ContactController::class, 'show']);
    Route::get('/contact/today', [DashboardController::class, 'today']);
    Route::get('/contact/yesterday', [DashboardController::class, 'yesterday']);
    Route::get('/contact/seven/day', [DashboardController::class, 'seven']);
    Route::get('/contact/month', [DashboardController::class, 'month']);
        Route::resource('/users', UserController::class);
    
    // Route::get('/six-class/add', [SixController::class, 'create']);
    // Route::post('/six-class/register', [SixController::class, 'store']);
    // Route::get('/six-class/{slug}', [SixController::class, 'show']);
    // Route::get('/six-class/add-mark/{slug}', [SixController::class, 'addmark']);
});




 



require __DIR__.'/auth.php';
