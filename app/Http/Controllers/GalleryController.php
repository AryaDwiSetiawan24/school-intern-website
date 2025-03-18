<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = Album::with('photos')->get();
        return view('pages/admin/galeri/show-all-album', compact('albums'));
    }

    public function create()
    {
        return view('pages/admin/galeri/add-galeri');
    }
    
    public function showAlbum($id)
    {
        $album = Album::with('photos')->findOrFail($id);
        return view('pages/admin/galeri/show-album', compact('album'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Album::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Album berhasil dibuat!');
    }

    public function edit(Album $album)
    {
        return view('pages/admin/galeri/edit-galeri', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $album->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Album berhasil diperbarui!');
    }

    public function destroy(Album $album)
    {
        foreach ($album->photos as $photo) {
            Storage::delete($photo->photo);
            $photo->delete();
        }

        $album->delete();
        return redirect()->route('galeri.index')->with('success', 'Album berhasil dihapus!');
    }

    public function uploadPhoto(Request $request, Album $album)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'nullable|string',
        ]);

        // Simpan file ke penyimpanan
        $path = $request->file('photo')->store('photos', 'public');

        // Simpan ke database
        Photo::create([
            'album_id' => $album->id,
            'photo' => $path,
            'caption' => $request->caption,
        ]);

        return redirect()->route('galeri.showAlbum',$album->id)->with('success', 'Foto berhasil diunggah!');
    }


    public function editPhoto(Photo $photo)
    {
        return view('pages/admin/galeri/edit-photo', compact('photo'));
    }

    public function updatePhoto(Request $request, Photo $photo)
    {
        $albumId = $photo->album_id;
        $request->validate([
            'caption' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($photo->photo) {
                Storage::delete($photo->photo);
            }

            // Simpan foto baru
            $path = $request->file('photo')->store('photos', 'public');
            $photo->update(['photo' => $path]);
        }

        // Perbarui caption jika ada
        if ($request->caption) {
            $photo->update(['caption' => $request->caption]);
        }

        return redirect()->route('galeri.showAlbum',$albumId)->with('success', 'Foto berhasil diperbarui!');
    }


    public function deletePhoto(Photo $photo)
    {
        $albumId = $photo->album_id;
        Storage::delete($photo->photo);
        $photo->delete();
        return redirect()->route('galeri.showAlbum', $albumId)->with('success', 'Foto berhasil dihapus!');

    }
}
