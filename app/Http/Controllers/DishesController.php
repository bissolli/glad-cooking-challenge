<?php

namespace CookingChallenge\Http\Controllers;

use CookingChallenge\Http\Requests\DishesRequest;
use CookingChallenge\Model\Country;
use CookingChallenge\Model\Dish;

class DishesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create')
            ->with('user', auth()->getUser())
            ->with('countries', Country::orderBy('name')->get());
    }

    /**
     * Show the application dashboard.
     *
     * @param DishesRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DishesRequest $request)
    {
        try {
            $payload = $request->all();
            $payload['photo'] = $request->file('photo')->store('dishes', 'public');

            auth()->getUser()->dishes()->create($payload);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), $e->getCode());
        }

        return redirect('/home')
            ->with('flash_success', 'Incluido');
    }

    public function toggleFavorite(Dish $dish)
    {
        //
    }
}
