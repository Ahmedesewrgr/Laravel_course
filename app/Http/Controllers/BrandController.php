<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
<<<<<<< HEAD




=======
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
        $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'founded_year' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'published_at' => 'nullable|boolean',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('brands', 'public');
        }

<<<<<<< HEAD

=======
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
        Brand::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'founded_year' => $request->founded_year,
            'image_path' => $path,
<<<<<<< HEAD
            'published_at' => $request->published_at ? 1 : 0,
=======
            'published' => $request->published ? 1 : 0,
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
        ]);

        return redirect()->route('brand.create')->with('success', 'Brand added successfully!');
    }

}
