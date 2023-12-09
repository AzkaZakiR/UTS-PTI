<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class CarsController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        // $cars = Cars::all()->paginate(7);
        $cars = Cars::paginate(7);

        return view('cars.show', compact('cars'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('cars.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric', // Add more specific validation rules
            'status' => 'required',
            'plat_number' => 'required',
            'price_per_day' => 'required|numeric',
            'price_per_day' => 'required|numeric',
            //'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Example image validation
        ]);
        $data = $request->all();

        // $fileName = time() . '.' . $request->image->extension();
        // $request->image->storeAs('images/cars', $fileName);
        $cars = new Cars;
        $cars->brand = $request->input('brand');
        $cars->model = $request->input('model');
        $cars->year = $request->input('year');
        $cars->status = $request->input('status');
        $cars->plat_number = $request->input('plat_number');
        $cars->price_per_day = $request->input('price_per_day');
        $cars->price_per_week = $request->input('price_per_week');
        $cars->type = $request->input('type');
        $cars->seats = $request->input('seats');
        $cars->engine = $request->input('engine');
        $cars->transmission = $request->input('transmission');
        $cars->gasoline = $request->input('gasoline');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/cars'), $filename);
            $cars->image = $filename;
        } elseif ($request->filled('image_link')) {
            // Handle image link
            $cars->image = $request->input('image_link');
        }
      //  $cars->mileage = $request->input('mileage');
        //$cars->transmission = $request->input('transmission');
        
        $cars->save();
        return redirect()->route('cars')->with('success', 'Car created successfully.');
    }

    // Display the specified resource.
    public function show(Cars $car)
    {
        return view('cars.show', compact('car'));
    }

    // Show the form for editing the specified resource.
    public function edit(String $id)
    {
        $car = Cars::findorFail($id);
        return view('cars.create', compact('car'));
    }
    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric', // Add more specific validation rules
            'status' => 'required',
            'plat_number' => 'required',
            //'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Example image validation
        ]);

        $cars = Cars::findorFail($id);
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/cars'), $filename);
            Storage::delete('images/cars/'.$cars->image); //delete old images
            $cars->image = $filename;
        }

        $cars->brand = $request->input('brand');
        $cars->model = $request->input('model');
        $cars->year = $request->input('year');
        $cars->status = $request->input('status');
        $cars->plat_number = $request->input('plat_number');
        $cars->color = $request->input('color');
        $cars->save();
        return redirect()->route('cars')->with('success', 'Car updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $car = Cars::findOrFail($id);
        $car->delete();
        return redirect()->route('cars')->with('success', 'Car deleted successfully.');
    }
}
