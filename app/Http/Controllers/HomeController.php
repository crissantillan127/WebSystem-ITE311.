<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage view.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the about page view.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the contact page view.
     */
    public function contact()
    {
        return view('contact');
    }
}