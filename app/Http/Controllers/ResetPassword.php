<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\ForgotPassword;
use Illuminate\Notifications\Notifiable;
use RealRashid\SweetAlert\Facades\Alert;

class ResetPassword extends Controller
{
    use Notifiable;

    public function show()
    {
        return view('admin.user.reset');
    }

    public function change(Request $request)
    {
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)
            ->update(['password' => bcrypt($request->new_password)]);

        Alert::toast('Password berhasil diubah', 'success')->autoClose(5000);
        return redirect()->back();
    }
}
