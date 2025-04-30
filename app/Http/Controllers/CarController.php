<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::latest()->paginate(8);
        return view('admin.cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'engine' => 'required',
            'quantity' => 'required',
            'price_per_day' => 'required',
            'status' => 'required',
            'reduce' => 'required',
            'stars' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $car = new Car;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->engine = $request->engine;
        $car->quantity = $request->quantity;
        $car->price_per_day = $request->price_per_day;
        $car->status = $request->status;
        $car->reduce = $request->reduce;
        $car->stars = $request->stars;

        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->brand . '-' . $request->model . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images/cars'), $imageName);
            $car->image = '/images/cars/' . $imageName;
        }
        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $car = Car::findOrFail($car->id);
        return view('admin.updateCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'engine' => 'required',
            'quantity' => 'required',
            'price_per_day' => 'required',
            'status' => 'required',
            'reduce' => 'required',
            'stars' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $car = Car::findOrFail($car->id);

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->engine = $request->engine;
        $car->quantity = $request->quantity;
        $car->price_per_day = $request->price_per_day;
        $car->status = $request->status;
        $car->reduce = $request->reduce;
        $car->stars = $request->stars;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($car->image) {
                $oldImagePath = public_path($car->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Store new image
            $imageName = time() . '-' . $request->brand . '-' . $request->model . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images/cars'), $imageName);
            $car->image = '/images/cars/' . $imageName;
        }
        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car = Car::findOrFail($car->id);
        
        // Check if the car has any active reservations
        $activeReservations = $car->reservations()->where('status', 'Active')->count();
        
        if ($activeReservations > 0) {
            return redirect()->route('cars.index')->with('error', 'Cannot delete car with active reservations.');
        }
        
        // Delete inactive reservations
        $car->reservations()->where('status', '!=', 'Active')->delete();
        
        // Delete the image
        if ($car->image) {
            $imagePath = public_path($car->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
