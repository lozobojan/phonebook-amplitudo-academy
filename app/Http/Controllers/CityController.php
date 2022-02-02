<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        return view("city.index", [
            "cities" => City::all()
        ]);
    }

    public function create()
    {
        return view("city.create");
    }

    public function store(CityRequest $request)
    {
        City::query()->create($request->validated());
        return redirect()->route("city.index");
    }

    // implicit route-model binding
    public function show(City $city)
    {
        return view("city.show", [
            "city" => $city
        ]);
    }

    public function edit(City $city)
    {
        return view("city.edit", [
            "city" => $city
        ]);
    }

    public function update(CityRequest $request, City $city)
    {
        $city->update($request->validated());
        return redirect()->route("city.index");
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route("city.index");
    }
}
