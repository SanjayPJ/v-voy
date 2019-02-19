<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function services(){
        return view('pages.services');
    }

    public function courses(){
        return view('pages.courses');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function team(){
        return view('pages.team');
    }

    public function about(){
        return view('pages.about');
    }
}
