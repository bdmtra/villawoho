<?php
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/availability', 'SiteController@checkDefaultHotelAvailability')->name('checkDefaultHotelAvailability');
Route::get('/calendar','CalendarController@index')->name('calendar');
Route::get('/calendar/loadDates','CalendarController@loadDates')->name('calendar.loadDates');
Route::post('/calendar/store','CalendarController@store')->name('calendar.store');

// Logs
Route::get(config('admin.admin_route_prefix').'/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'dashboard','system_log_view'])->name('admin.logs');
