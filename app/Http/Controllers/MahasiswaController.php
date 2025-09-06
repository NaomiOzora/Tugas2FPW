<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; // <-- Tambahkan ini
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $data_mahasiswa]);
    }
}