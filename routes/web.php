<?php

use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController as ControllersPropertyController;
use Illuminate\Support\Facades\Route;

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', [HomeController::class, 'index']);
Route::get('/biens', [ControllersPropertyController::class, 'index'])->name("property.index");
Route::get('/biens/{slug}-{property}', [ControllersPropertyController::class, 'show'])->name("property.show")->where([
    'slug' => $slugRegex, 
    'property' => $idRegex, 
]);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('option', OptionController::class)->except('show');
    Route::resource('property', PropertyController::class)->except('show');
});