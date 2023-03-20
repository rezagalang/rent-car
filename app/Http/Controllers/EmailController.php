<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'noTelp' => 'required|numeric',
            'alamat' => 'required',
            'tglSewa' => 'required',
        ]);
        
        $noSewa = 'RC'.now()->format('d').now()->format('m').now()->format('y').rand(10,99);

        if($this->isOnline()) {
            $emailData = [
                'recipient' => $request->email,
                'fromEmail' => 'r3za.dev@gmail.com',
                'fromName' => 'RentCar',
                'subject' => 'Pesanan',
                'nama' => $request->nama,
                'tglSewa' => $request->tglSewa,
                'noSewa' => $noSewa,
                'jenisMobil' => $request->jenisMobil,
                'harga' => $request->harga,
                'alamat' => $request->alamat,
                'noTelp' => $request->noTelp,
            ];

            Mail::send('email-template', $emailData, function ($message) use ($emailData) {
                $message->to($emailData['recipient'])
                ->from($emailData['fromEmail'], $emailData['fromName'])
                ->subject($emailData['subject']);
            });

            $order = new Order();
            $order->car_id = $request->car_id;
            $order->noSewa = $noSewa;
            $order->nama = $request->nama;
            $order->email = $request->email;
            $order->noTelp = $request->noTelp;
            $order->alamat = $request->alamat;
            $order->tglSewa = $request->tglSewa;
            $order->save();

            Alert::toast('Pesanan sukses dibuat', 'success')->autoClose(5000);
            return redirect()->back();

        } else {
            Alert::toast('Periksa koneksi internet anda', 'warning')->autoClose(5000);
            return redirect()->back()->withInput();
        }


    }

    public function isOnline($site = 'https://youtube.com/') 
    {
        if(@fopen($site, 'r')) {
            return true;
        } else {
            return false;
        }
    }

    public function wa(Request $request)
    {
            $wa = $request->wa;
            return Redirect::to('https://api.whatsapp.com');
            // header('location:https://api.whatsapp.com/send?phone=$wa');
    }
}
