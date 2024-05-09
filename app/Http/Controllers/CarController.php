<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('car.index',[
            'active' => 'car',
            'cars' => Car::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.tambah',[
            'active' => 'car'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $dataValid = $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'nomor_polisi' => ['required', 'unique:cars'],
            'tarif' => 'required',


        ]);
        Car::create($dataValid);
        return redirect('/cars')->with('success', 'Data Berhasil Ditambahkan');
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
    public function edit( $car)
    {$car =Car::Find($car);
        //dd($car);
        return view('car.edit',[
            'active' => 'car',
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $car)
    {
        $car =Car::find($car);
        $car->merek = $request->merek;
        $car->model = $request->model;
        $car->nomor_polisi = $request->nomor_polisi;
        $car->tarif = $request->tarif;
        $car->save();
        return redirect('/cars')->with('success','data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
