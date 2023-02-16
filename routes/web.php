<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/{number_1?}/{number_2?}', function ($number_1 = null,$number_2 = null) {

    $result = $number_1 + $number_2 ;

    return "$result" ;
})->where([
    'number_1' => '[2-4]+',
    'number_2' => 5,
]);

Route::controller(MathController::class)->prefix('math')->name('math.')->group(function () {
    Route::get('/area/{number_1?}/{number_2?}', 'area')->whereNumber(['number_1','number_2']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
