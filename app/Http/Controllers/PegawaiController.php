<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    // tampil di user
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pages/user/pegawai', compact('pegawai'));
    }

    // tampil di admin
    public function create()
    {
        return view('pegawai.create');
    } 

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'jabatan' => 'required|string|max:255',
            'role' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->role = $request->role;
        if ($request->hasFile('foto')) {
            $pegawai->foto = $request->file('foto')->store('images', 'public');
        }
        $pegawai->save();

        if ($pegawai) {
            return redirect()->route('pegawai.store')->with('success', 'Pegawai created successfully.');
        } else {
            return redirect()->route('pegawai.store')->with('error', 'Failed to create Pegawai.');
        }
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pages/admin/pegawai/edit-pegawai', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required',
            'jabatan' => 'required|string|max:100',
            'role' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->role = $request->role;

        if ($request->hasFile('foto')) {
            if ($pegawai->foto) {
                Storage::disk('public')->delete($pegawai->foto);
            }
            $pegawai->foto = $request->file('foto')->store('images', 'public');
        }

        $pegawai->save();

        return redirect()->route('pegawai.store')->with('success', 'Pegawai updated successfully.');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.page')->with('success', 'Pegawai deleted successfully.');
    }
}
