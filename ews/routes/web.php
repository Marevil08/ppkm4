<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BlynkController;
use App\Http\Controllers\Dashboard;

// use App\Http\Controllers\Acceleration;
// use App\Http\Controllers\Rotation;


// Route::group(['prefix' => 'blynk'], function () {
//     Route::get('/fetch-data/{TMPL6RX_sqaPl}', [BlynkController::class, 'fetchData'])->name('blynk.fetch-data');
// });

Route::get("/", [Dashboard::class, "index"])->name("dashboard");


Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get("/accelerometer-history", [Dashboard::class, "getHistoryAcceleration"]);
Route::get("/rotation-history", [Dashboard::class, "getHistoryRotation"]);
Route::get("/temperature-history", [Dashboard::class, "getHistoryTemperature"]);
Route::get("/humidity-history", [Dashboard::class, "getHistoryHumidity"]);
// Route::post('/acceleration/{sensorId}', [Acceleration::class, 'store'])->name('ctx_Acceleration');

// Route::get('/rotation/{sensorId}', [Rotation::class, 'index'])->name('ctx_Rotation');
// Route::post('/rotation/{sensorId}', [Rotation::class, 'store'])->name('ctx_Rotation');

// Route::get('/temperature/{sensorId}', [Temperature::class, 'index'])->name('ctx_Temperature');
// Route::post('/temperature/{sensorId}', [Temperature::class, 'store'])->name('ctx_Temperature');

// Route::get('/humidity/{sensorId}', [Humidity::class, 'index'])->name('ctx_Humidity');
// Route::post('/humidity/{sensorId}', [Humidity::class, 'store'])->name('ctx_Humidity');
