<?php

namespace App\Http\Controllers;

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
        $bicycle = new Bicycle;
        $bicycle->brand = $request->input('brand');
        $bicycle->model = $request->input('model');
        $bicycle->save();

        return redirect()->route('bicycles.index');
    }
}
