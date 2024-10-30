<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(){

        return view('about');
    }

    public function causes(){

        return view('causes');
    }

    public function blog(){

        return view('blog');
    }

    public function index(){

        return view('index');
    }
    public function contact(){

        return view('contact');
    }
    public function single(){

        return view('single');
    }

}
