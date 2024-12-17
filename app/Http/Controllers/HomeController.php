<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home');
    }

    function tentang() {
        return view('tentang');
    }

    function kontak() {
        return view('kontak');
    }
}
