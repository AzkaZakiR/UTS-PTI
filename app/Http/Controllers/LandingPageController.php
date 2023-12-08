<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars = Cars::orderBy('price_per_day', 'desc')->take(6)->get();
        $cars->each(function ($car) {
            $car->price_per_day= number_format($car->price_per_day); // Add comma to the price
        });
        return view('landingPage.index', compact('cars'));
    }

    public function main()
    {
        return view('landingPage.main');
    }
    public function about()
    {
        return view('landingPage.about');
    }

    public function services()
    {
        return view('landingPage.services');
    }
    public function cars()
    {
        $cars = Cars::all();
        $cars->each(function ($car) {
            $car->price_per_day = number_format($car->price_per_day); // Add comma to the price
        });
        return view('landingPage.carslist', compact('cars'));
    }
    public function detailcar(string $id) 
    {
        $car = Cars::findorFail($id);
        $brand = $car['brand'];
        $similarCar = Cars::where('brand', $brand)->where('id', '!=', $id)->take(3)->get();

        return view('landingPage.cardetail', compact('car', 'similarCar'));
    }
    public function checkoutcar(string $id) 
    {
        $car = Cars::findorFail($id);
         $car->formatted_price = number_format($car->price_per_day); // Add comma to the price
         $car->price_per_week = number_format($car->price_per_week); // Add comma to the price
        return view('landingPage.checkout', compact('car'));
    }
    public function pricing()
    {
        $cars = Cars::take(5)->get();

        $cars->each(function ($car) {
            $car->formatted_price = number_format($car->price_per_day); // Add comma to the price
        });
        $cars->each(function ($car) {
            $car->price_per_week = number_format($car->price_per_week); // Add comma to the price
        });
        $cars->each(function ($car) {
            $overcharge = $car->price_per_day * 0.1;
            $car->overcharge = number_format($overcharge) ; // Add comma to the price
        });

        return view('landingPage.pricing', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
