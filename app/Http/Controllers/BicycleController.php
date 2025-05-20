<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\Bicycle;

class BicycleController extends Controller
{
    public function index()
    {
        $bicycles = Bicycle::all();
        return view('bicycles.index', compact('bicycles'));
    }

    public function create()
    {
        return view('bicycles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|min:3',
            'model' => 'required',
        ], [
            'brand.required' => 'Brand is mandatory in a bicycle.',
            'brand.min' => 'Bicycle brand must be at least 3 characters long.',
            'model.required' => 'Model is mandatory in a bicycle.',
        ]);
 
        $bicycle = new Bicycle;
        $bicycle->brand = $request->input('brand');
        $bicycle->model = $request->input('model');
        $bicycle->save();

        return redirect()->route('bicycles.index');
    }
}
