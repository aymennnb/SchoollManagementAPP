<?php

use App\Http\Controllers\homeController;
use Illuminate\Http\Request;

// Route::get('/home/{nom}', function (Request $request) {
//     return view('home',[
//         'nom'=>$request->nom,
//         'cours'=>['PHP',"Html","Css"]
//     ]);
// });

// Route::get('/{nom}',[homeController::class,'index']);

Route::get('/contact', function(){
    return view('includes_pages.contact');
})->name('contact'); 

Route::get('/apropos', function(){
    return view('includes_pages.apropos');
})->name('apropos'); 
Route::get('/home', function(){
    $langues = [['id'=> 1,'name' =>'PHP','role'=>'front-end'],
                    ['id'=> 2,'name' =>'C#','role'=>'Back-end'],
                    ['id'=> 3,'name' =>'C++','role'=>'Back-end']
        ];
    return view('includes_pages.home',compact('langues'));
})->name('home'); 