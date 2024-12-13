<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient; // Pastikan Anda memiliki model Patient
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    // Menampilkan form registrasi pasien
    public function create()
    {
        return view('auth.register_patient'); // Pastikan Anda memiliki view ini
    }

    // Menyimpan data registrasi pasien
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'ktp_number' => 'required|string|max:20|unique:patients',
            'phone_number' => 'required|string|max:15',
            'terms' => 'accepted', // Pastikan checkbox terms diset
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data pasien
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->address = $request->address;
        $patient->ktp_number = $request->ktp_number;
        $patient->phone_number = $request->phone_number;
        $patient->save();

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
