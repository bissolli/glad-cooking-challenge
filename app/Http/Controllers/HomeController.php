<?php

namespace CookingChallenge\Http\Controllers;

use CookingChallenge\Model\Dish;

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
        $dishes = Dish::with('user')->orderBy('name')->get();

        return view('home')
            ->with('dishes', $dishes);
    }
}
