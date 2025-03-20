<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    // Tampilkan daftar siswa di halaman user
    public function index()
    {
        $siswas = Siswa::all();
        $siswas = Siswa::latest()->paginate(10);
        return view('pages/user/siswa', compact('siswas'));
    }
    
    // Tampilkan detail siswa
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('pages/admin/siswa/show-siswa', compact('siswa'));
    }

    // Cek NISN apakah sudah digunakan
    public function checkNISN(Request $request)
    {
        $nisn = $request->input('nisn');
        $exists = Siswa::where('nisn', $nisn)->exists();
        return response()->json(['exists' => $exists]);
    }

    // Simpan siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'kelas' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $siswa = new Siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin ?? null; 
        $siswa->kelas = $request->kelas;
        if ($request->hasFile('foto')) {
            $siswa->foto = $request->file('foto')->store('images', 'public');
        }
        $siswa->save();

        if ($siswa) {
            return redirect()->route('siswa.add')->with('success', 'Siswa berhasil ditambahkan.');
        } else {
            return redirect()->route('siswa.add')->with('error', 'Data siswa gagal ditambahkan.');
        }
    }

    // Tampilkan form edit siswa
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('pages/admin/siswa/edit-siswa', compact('siswa'));
    }

    // Update data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn,' . $id,
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan', 
            'kelas' => 'required|string|max:100',
            'foto' => 'nullable|image'
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        if ($request->hasFile('foto')) {
            $siswa->foto = $request->file('foto')->store('images', 'public');
        }
        $siswa->save();

        return redirect()->route('siswa.page')->with('success', 'Siswa berhasil diperbarui.');
    }

    // Hapus siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.page')->with('success', 'Siswa berhasil dihapus.');
    }
}
