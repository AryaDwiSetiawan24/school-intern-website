<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages/user/dashboard');
    }

    public function profil()
    {
        return view('pages/user/profil');
    }
}
