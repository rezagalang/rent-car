<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
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
            'jenisMobil' => 'required',
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

        $car->jenisMobil = $request->jenisMobil;
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

    public function edit(Car $car)
    {
        return view('admin.car.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $dataCar = $request->validate([
            'jenisMobil' => 'required',
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


    // Order
    public function order()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function editOrder(Order $order)
    {
        return view('admin.order.edit', compact('order'));
    }

    public function updateOrder(Request $request, Order $order)
    {
        $dataOrder = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'noTelp' => 'required|numeric',
            'alamat' => 'required',
            'tglSewa' => 'required',
        ]);
        
        Order::where('id', $order->id)->update($dataOrder);

        Alert::toast('Data berhasil dihapus', 'success')->autoClose(5000);
        return redirect()->route('order.index');
    }

    public function orderDestroy(Order $order)
    {
        $order->delete();
        Alert::toast('Data berhasil dihapus', 'success')->autoClose(5000);
        return redirect()->route('order.index');
    }
}
