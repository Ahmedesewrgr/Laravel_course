<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(1)
            ->cars()
            ->with(['primaryImage', 'maker', 'model'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'maker_id' => 'required|integer',
            'model_id' => 'required|integer',
            'year' => 'required|integer',
            'car_type_id' => 'required|integer',
            'price' => 'required|numeric',
            'fuel_type_id' => 'required|integer',
            'vin' => 'required|string',
            'mileage' => 'nullable|string',
            'city_id' => 'required|integer',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'description' => 'nullable|string',
            'published' => 'nullable|boolean',
        ]);

        $car = Car::create([
<<<<<<< HEAD
            'user_id' => 1, // ربط العربية بالمستخدم الحالي
=======
            'user_id' => Auth::id(), // ربط العربية بالمستخدم الحالي
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
            'maker_id' => $request->maker_id,
            'model_id' => $request->model_id,
            'year' => $request->year,
            'car_type_id' => $request->car_type_id,
            'price' => $request->price,
            'vin' => $request->vin,
            'mileage' => $request->mileage,
            'fuel_type_id' => $request->fuel_type_id,
            'city_id' => $request->city_id,
            'address' => $request->address,
            'phone' => $request->phone,
            'description' => $request->description,
<<<<<<< HEAD
            // 'published_at' => $request->published_at ? 1 : 0,
=======
            'published_at' => $request->published_at ? 1 : 0,
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
            'published_at' => $request->published ? now() : null,

        ]);

<<<<<<< HEAD

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create([
                    'image_path' => $path,
                    'is_primary' => $index === 0 ? 1 : 0, // أول صورة تبقى أساسية
                    'position' => $index + 1,
                ]);
            }
        }


=======
        // حفظ الصور لو اتبعتت
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['image_path' => $path, 'position' => 1]);
            }
        }

>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
        return redirect()->route('car.show', $car->id);
    }


    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('car.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $data = $request->validate([
            'maker_id' => 'required|integer',
            'model_id' => 'required|integer',
            'year' => 'required|integer',
            'price' => 'nullable|numeric',
            'vin' => 'nullable|string|max:255',
            'mileage' => 'nullable|integer',
            'car_type_id' => 'nullable|integer',
            'fuel_type_id' => 'nullable|integer',
            'city_id' => 'nullable|integer',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'nullable|string',
            'published_at' => 'nullable',
        ]);

        if ($request->has('published')) {
            $data['published_at'] = now();
        } else {
            $data['published_at'] = null;
        }
        $car->update($data);

        return redirect()->route('car.index')->with('success', 'Car updated successfully!');
    }


    /**
     * Update the specified resource in storage.
     */
=======
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('car.index')->with('success', 'Car deleted successfully!');
=======
    public function destroy(Car $car)
    {
        //
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
    }

    public function search()
    {
        // $query = Car::select('cars*')-> where('published_at', '<', now())
        $query = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->orderBy('published_at', 'desc');

        // $query->leftJoin('cities','cities.id','=','cars.city_id')
        // // $query->Join('cities','cities.id','=','cars.city_id')
        // ->join('car_types','car_types.id','=','cars.car_type_id')
        // ->where('cities.state_id',1)
        // ->where('car_types.name','Sedan');
        // $query->select('cars.*','cities.name as city_name');
        // $carCount = $query->count();
        // $cars = $query->limit(30)->get();
        $cars = $query->paginate(15);

        return view('car.search', ['cars' => $cars]);
    }

    public function watchlist()
    {
        $cars = User::find(4)
            ->favouriteCars()
            ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->paginate(15);

        return view('car.watchlist', ['cars' => $cars]);
    }

}
