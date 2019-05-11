<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome', [
            'laracast' => 'Laracasts',
            'name' => request('name')
        ]);
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }

}

