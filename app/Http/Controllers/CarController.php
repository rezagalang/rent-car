<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.car.add');
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
            'image' => 'required|file|max:1024',
        ]);
        
        $car = new Car;

        if($request->file('image')) {
            $car->image = $request->file('image')->store('images');
        }

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
        return view('admin.car.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $dataCar = $request->validate([
            'namaBarang' => 'required',
            'merk' => 'required',
            'harga' => 'required|numeric',
            'tempatDuduk' => 'required|numeric',
            'transmisi' => 'required',
            'bahanBakar' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|file|max:1024',
        ]);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
                $dataCar['image'] = $request->file('image')->store('images');
        }
        
        Car::where('id', $car->id)->update($dataCar);

        Alert::toast('Data berhasil dihapus', 'success')->autoClose(5000);
        return redirect()->route('car.index');
    }

    public function destroy(Car $car)
    {
        if($car->image) {
            Storage::delete($car->id);
        }
        $car->delete();
        Alert::toast('Data berhasil dihapus', 'success')->autoClose(5000);
        return redirect()->route('car.index');
    }
}
