<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class AdmController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }
    
    public function user()
    {
        $users = User::role('2')->orderBy('created_at', 'ASC')->get();
        return view('pages.admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('pages.admin.user.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required','max:255', 'min:2'],
            'nama' => ['required','max:255', 'min:2'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('1234');
        $user->assignRole('2');
        $user->save();

        Alert::toast('User berhasil ditambahkan', 'success')->autoClose(5000);
        return redirect()->route('user.index');
    }

    public function edit(Request $request, User $user)
    {
        return view('pages.admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => ['required','max:255', 'min:2'],
            'nama' => ['required','max:255', 'min:2'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
        ]);

        User::where('id', $user->id)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        Alert::toast('User berhasil diubah', 'success')->autoClose(5000);
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        Alert::toast('User berhasil dihapus', 'success')->autoClose(5000);
        return redirect()->route('user.index');
    }
}
