<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Models\pegawai;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pages/user/dashboard', compact('pegawai'));
    }

    public function profil()
    {
        return view('pages/user/profil');
    }
}
