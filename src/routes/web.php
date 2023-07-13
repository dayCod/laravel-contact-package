<?php

use DayCod\Contact\http\controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::namespace('DayCod\Contact\http\controllers')->group(function () {

    Route::get('/contact', [ContactController::class, 'index'])->name('contact-page');

    Route::post('/contact', [ContactController::class, 'send'])->name('contact');

});

