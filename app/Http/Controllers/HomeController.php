<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonateFormRequest as Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function mission()
    {
        return view('mission');
    }

    public function request()
    {
        return view('request');
    }
}
