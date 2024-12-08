<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagenotfoundController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\PropertygalleryController;
use App\Http\Controllers\SubmitpropertyController;
use App\Models\Property;

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
 

//Auth::routes();


//routes 


Route::get('/', [HomeController::class, 'index'])->name('home.view');
Route::get('/search', [HomeController::class, 'search'])->name('home.prop.search');
Route::get('/property/search', [PropertyController::class, 'search'])->name('prop.search');


Route::get('/properties', [PropertyController::class, 'index'],)->name('properties.view');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.view');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.view');
Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
Route::get('/login', [LoginController::class, 'index'])->name('login.view');
Route::get('/submitproperty', [SubmitpropertyController::class, 'index'])->name('submitproperty.view');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.view');
Route::get('/terms', [TermsController::class, 'index'])->name('terms.view');
Route::get('/404', [PagenotfoundController::class, 'index'])->name('404.view');
 
 
Route::get('/properties/{property}', [PropertyController::class, 'show'] ) ;


Route::get('/admin', [adminController::class, 'index'])->name('admin.view');
 



