<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function show()
    {
        return view('/pendaftaran.siswa');
    }

    public function create(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'notelp' => 'required|tel|max:15',
            'gender' => 'required',
            'tgl_lahir' => 'required|date_format:d/m/Y',
            'nilai' => 'required|max:100',
            'alamat' => 'required|max:255',
            'name_ortu' => 'required|max:255',
            'notelp_ortu' => 'required|tel|max:15',
            'tgl_lahir_ortu' => 'required|date_format:d/m/Y',
            'pendidikan' => 'required|max:100',
            'alamat_ortu' => 'required|max:255',
            'fc_kk' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ]);

        if ($request->hasFile('fc_kk')) {
            // Store the uploaded file and get its path
            $path = $request->file('fc_kk')->store('uploads', 'public');

            // Add the file path to the validated data
            $validatedData['fc_kk'] = $path;
        }

        // Create a new user
        Pendaftaran::create($validatedData);

        // You can add more logic here, such as sending a confirmation email

        // Redirect to a thank you page or wherever you want
        return redirect('/pendaftaran.orangtua');
    }
}
