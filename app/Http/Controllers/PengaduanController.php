<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    // Menyimpan pengaduan dari form
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact_no' => 'required|string|max:15',
            'description' => 'required|string',
        ]);

        Pengaduan::create($request->all());

        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim!');
    }

    // Menghapus pengaduan
    public function destroy($id)
    {
        Pengaduan::findOrFail($id)->delete();
        return redirect()->route('pengaduan.show-all-pengaduan')->with('success', 'Pengaduan berhasil dihapus!');
    }
}

