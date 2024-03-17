<?php

use App\Http\Livewire\Home;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MijazContact;
use App\Http\Livewire\Tutors;

/*
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/



Route::get('pdfview', array('as' => 'pdfview', 'uses' => 'ItemController@pdfview'));
Route::get('contact/mijaz', MijazContact::class)->name('mijaz.contact');
Route::get('/', Home::class)->name('home');
Route::get('tutors', Tutors::class)->name("tutors");


// ALL ROUTES ARE DELETED, YOU CAN CONTACT ME WITH https://www.fiverr.com/dowhfcrt OR WHATSAPP: +92 0312 9496281
