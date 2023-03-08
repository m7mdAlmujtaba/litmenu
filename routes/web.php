<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
//use App\Http\Livewire\Dashboard;

use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\Dashboard\Restaurant;
use App\Http\Livewire\Dashboard\SingleRestaurant;


use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\Website\Menu;
use Illuminate\Http\Request;

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

Route::get('/', function() { return ("Hello");})->name('home');

// Menus
Route::get('/menu/{menu}/{res}/', Menu::class)->name('menu');

//routs for auth  users they have role user
Route::middleware(['auth', 'role:user'])->group(function () {
     Route::get('/dashboard', Dashboard::class)->name('dashboard');
     //restaurant
    Route::get('/dashboard/restaurant', Restaurant::class)->name('restaurant');
    Route::get('/dashboard/restaurant/{id}', SingleRestaurant::class)->name('single-restaurant');
});
//
Route::get('qr-code/{menu}/{res}', function ($menu,$res) 
{
    //check if menu and res are integers
    if(!is_numeric($menu) || !is_numeric($res))
    {
        return response()->json(['error' => 'Invalid data'], 400);
    }
  return  response(QRCode::url('menu.litcode-it.com/menu/'.$menu.'/'.$res)->png(), 200)
  ->header('Content-Type', 'image/png'); ;    
});
// Laravel Examples
Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});

