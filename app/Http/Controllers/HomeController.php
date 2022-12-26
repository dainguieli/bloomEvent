<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.home');
    }

    public function about(){
        return view('home.about');
    }

    public function galerie(){
        return view('home.galerie');
    }
    public function actualite(){
        return view('home.actualite');
    }

    public function realisation(){
        return view('home.realisation');
    }
    public function contact(){
        return view('home.contact');
    }
}
