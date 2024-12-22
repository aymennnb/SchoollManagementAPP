<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index($nom){
        $langues = [['id'=> 1,'name' =>'PHP','role'=>'front-end'],
                    ['id'=> 2,'name' =>'C#','role'=>'Back-end'],
                    ['id'=> 3,'name' =>'C++','role'=>'Back-end']
        ];
        //$langues = [];
        return view('layout',compact('nom','langues',));
    }
}
