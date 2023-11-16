<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class SignupController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('pages.auth.login', compact('mahasiswas'));
    }

    public function create()
    {
        return view('pages.auth.login');
    }

    public function store(Request $request)
    {
        // Validation logic here

        $email = $request->input('mail_mhs');
        $role = $this->getRoleFromEmail($email);

        $mahasiswa = new Mahasiswa([
            'nama_mhs' => $request->input('nama_mhs'),
            'nim' => $request->input('nim'),
            'mail_mhs' => $email,
            'role' => $role,
            'telp_mhs' => $request->input('telp_mhs'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Additional check for duplicate entry
        $existingUser = Mahasiswa::where('nama_mhs', $request->input('nama_mhs'))
            ->orWhere('nim', $request->input('nim'))
            ->orWhere('mail_mhs', $request->input('mail_mhs'))
            ->orWhere('telp_mhs', $request->input('telp_mhs'))
            ->first();

        if ($existingUser) {
            return redirect()->route('signup.index')->with('error', 'User already exists. Please enter different information.');
        }

        if ($mahasiswa->save()) {
            return redirect()->route('signup.index')->with('success', 'Mahasiswa created successfully');
        } else {
            return redirect()->route('signup.index')->with('error', 'Failed to create Mahasiswa');
        }
    }


    private function getRoleFromEmail($email)
    {
        // Check if the email contains "gmail.com" for Mahasiswa
        if (strpos($email, 'gmail.com') !== false) {
            return 'mahasiswa';
        }

        // Check if the email contains "admin.id" for Admin
        if (strpos($email, 'admin.id') !== false) {
            return 'admin';
        }

        // Default role if no match
        return 'mahasiswa';
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('pages.auth.login', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        // Validation logic here

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update([
            'nama_mhs' => $request->input('nama_mhs'),
            'nim' => $request->input('nim'),
            'mail_mhs' => $request->input('mail_mhs'),
            'role' => $request->input('role'),
            'telp_mhs' => $request->input('telp_mhs'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('signup.index')->with('success', 'Mahasiswa updated successfully');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('signup.index')->with('success', 'Mahasiswa deleted successfully');
    }
}
