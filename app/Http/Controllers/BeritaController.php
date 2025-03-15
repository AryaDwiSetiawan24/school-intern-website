<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    // tampil di user
    public function index()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('pages/user/berita', compact('beritas'));
    }
    
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('pages/user/show-berita', compact('berita'));
    }

    // tampil di admin
    public function checkSlug(Request $request)
    {
        $slug = $request->input('slug');
        $exists = Berita::where('slug', $slug)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'slug' => 'required|unique:beritas',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->slug = $request->slug ? $request->slug : Str::slug($request->judul); // slug otomatis berdasarkan judul
        if ($request->hasFile('gambar')) {
            $berita->gambar = $request->file('gambar')->store('images', 'public');
        }
        $berita->save();

        return redirect()->route('berita.add')->with('success', 'Berita created successfully.');
    }

    // show berita detail di admin
    public function showDetail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('pages/admin/berita/show-berita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
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

        return redirect()->route('berita.page')->with('success', 'Berita updated successfully.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.page')->with('success', 'Berita deleted successfully.');
    }
}
