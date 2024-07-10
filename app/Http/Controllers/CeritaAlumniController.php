<?php

namespace App\Http\Controllers;

use App\Models\Cerita_alumni;
use Illuminate\Http\Request;

class CeritaAlumniController extends Controller
{
    public function index()
    {
        $alumniData = Cerita_alumni::all(); // Mengambil semua data dari tabel alumni
        return view('alumni.index', ['alumniData' => $alumniData]);
    }
}
