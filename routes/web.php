<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormateurController;

Route::get('/', function(){
    return view('includes_pages.home');
})->name('home');


Route::get('/contact', function(){
    return view('includes_pages.contact');
})->name('contact'); 


Route::get('/apropos', function(){
    return view('includes_pages.apropos');
})->name('apropos');


Route::get('/adm', function(){
    return view('includes_pages.adm');
})->name('adm');

Route::get('/formateurs', function(){
    return view('includes_pages.formateurs');
})->name('formateurs');

Route::get('/parents', function(){
    return view('includes_pages.parents');
})->name('parents');

Route::get('/etudiants', function(){
    return view('includes_pages.etudiants');
})->name('etudiants');

Route::get('/matiere', function () {
    return view('includes_pages.matiere');
})->name('matiere');

Route::get('/classes', function () {
    return view('includes_pages.classes');
})->name('classes');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');



