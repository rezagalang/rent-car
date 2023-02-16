<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('pages.admin.car.index', compact('cars'));
    }

    public function create()
    {
        return view('pages.admin.car.add');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'namaBarang' => 'required',
            'merk' => 'required',
            'harga' => 'required|numeric',
            'tempatDuduk' => 'required|numeric',
            'transmisi' => 'required',
            'bahanBakar' => 'required',
            'deskripsi' => 'required',
        ]);

        $car = new Car;
        $car->namaBarang = $request->namaBarang;
        $car->merk = $request->merk;
        $car->harga = $request->harga;
        $car->tempatDuduk = $request->tempatDuduk;
        $car->transmisi = $request->transmisi;
        $car->bahanBakar = $request->bahanBakar;
        $car->deskripsi = $request->deskripsi;
        $car->save();

        Alert::toast('Data berhasil ditambahkan', 'success')->autoClose(5000);
        return redirect()->route('car.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Car $car)
    {
        return view('pages.admin.car.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'namaBarang' => 'required',
            'merk' => 'required',
            'harga' => 'required|numeric',
            'tempatDuduk' => 'required|numeric',
            'transmisi' => 'required',
            'bahanBakar' => 'required',
            'deskripsi' => 'required',
        ]);

        Car::where('id', $car->id)->update([
            'namaBarang' => $request->namaBarang,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'tempatDuduk' => $request->tempatDuduk,
            'transmisi' => $request->transmisi,
            'bahanBakar' => $request->bahanBakar,
            'deskripsi' => $request->deskripsi,
        ]);

        Alert::toast('Data berhasil dihapus', 'success')->autoClose(5000);
        return redirect()->route('car.index');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        Alert::toast('Data berhasil dihapus', 'success')->autoClose(5000);
        return redirect()->route('car.index');
    }
}
