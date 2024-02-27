<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.home');
})->name('Home');

Route::get('/team', function () {
    return view('pages.team');
})->name('Team');

Route::get('/partners', function () {
    return view('pages.parthner');
})->name('Partner');

Route::get('/about', function () {
    return view('pages.about');
})->name('About');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('Contact-Us');

Route::get('/model', function () {
    return view('pages.modal');
})->name('modal');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/branding', function () {
    return view('pages.branding');
})->name('branding');


Route::post('send-mail',[\App\Http\Controllers\MailController::class,'index'])->name('send-mail');
