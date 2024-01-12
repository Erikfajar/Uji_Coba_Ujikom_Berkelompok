<?php

namespace App\Http\Controllers\Halaman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function kamar()
    {
        return view('Halaman.Admin.Kamar.index');
    }

    public function fasilitas_hotel()
    {
        return view('Halaman.Admin.Fasilitas_hotel.index');
    }
}
