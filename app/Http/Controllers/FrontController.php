<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $cars = Car::limit(6)->get();
        return view('home', compact('cars'));
    }

    public function sewa()
    {
        $cars = Car::get();
        return view('sewa', compact('cars'));
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function detail(Car $car)
    {
        $cars = Car::get();
        return view('detail', compact('car', 'cars'));
    }
}
