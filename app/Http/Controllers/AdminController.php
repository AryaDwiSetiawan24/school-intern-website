<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index()
    {
        return view('pages/admin/dashboard');
    }

    // Berita
    public function create()
    {
        $beritas = Berita::all();
        return view('pages/admin/berita/add-berita', compact('beritas'));
    }

    public function checkSlug(Request $request)
    {
        $slug = $request->input('slug');
        $exists = Berita::where('slug', $slug)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'slug' => 'required|unique:beritas',
            'gambar' => 'nullable|image'
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->slug = $request->slug ? $request->slug : Str::slug($request->judul); // slug otomatis berdasarkan judul
        if ($request->hasFile('gambar')) {
            $berita->gambar = $request->file('gambar')->store('images', 'public');
        }
        $berita->save();

        return redirect()->route('berita.create')->with('success', 'Berita created successfully.');
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('pages/admin/berita/show-berita', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('pages/admin/berita/edit-berita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'slug' => 'required|unique:beritas,slug,' . $id,
            'gambar' => 'nullable|image'
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->slug = $request->slug;
        if ($request->hasFile('gambar')) {
            $berita->gambar = $request->file('gambar')->store('images');
        }
        $berita->save();

        return redirect()->route('berita.create')->with('success', 'Berita updated successfully.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.create')->with('success', 'Berita deleted successfully.');
    }
}
