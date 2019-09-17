<?php

namespace App\Http\Controllers;

use App\Enums\Accounts;
use App\Enums\Statuses;
use App\Food;
use App\Http\Requests\DonateFormRequest as Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        if(!auth())
            return view('home');

        $user = auth()->user();
        if($user->account === Accounts::DONOR)
            $foods = $user->foods()->where('status', Statuses::DONATED)->orderBy('updated_at', 'desc')->get();
        if($user->account === Accounts::REQUESTER)
            $foods = Food::where('requester_id', $user->id)->where('status', Statuses::DONATED)->orderBy('updated_at', 'desc')->get();

        return view('profile', compact('foods'));
    }
}
