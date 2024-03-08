<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\kategori;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Admin::all();
        return view('dashboard.buku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::get();
        return view('admin.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image'     => 'required|image|mimes:png,jpg,jpeg',
        // ]);
        $this->validate($request, [
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $img = $request->file('gambar');
        $img->storeAs('public/storage/image', $img->hashName());
        // dd($request->all());
        Admin::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'thn_terbit' => $request->thn_terbit,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'id_kategori' => $request->id_kategori,
            'gambar' => $img->hashName(),
        ]);



        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Admin::where('id', $id)->first();
        $kategori = kategori::where('id', $buku->id_kategori)->first();
        $ulas = Ulasan::where('id_buku', $buku->id)->latest()->paginate(5);
        return view('admin.detail-buku', [
            'title' => 'Detail Buku',
            'active' => 'buku',
            'buku' => $buku,
            'kategori' => $kategori,
            'ulas' => $ulas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adm = Admin::findorfail($id);
        $kategori = kategori::orderBy('kategori')
            ->get();
        // $adm = Admin::with('kategori');
        return view('admin.edit')
            ->with([
                'adm' => $adm,
                'kategori' => $kategori,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd(($request->all()));
        $adm = Admin::findorfail($id);

        $awal = $adm->gambar;
        $img = $request->file('gambar');
        $img->storeAs('public/storage/image', $img->hashName());
        $adm->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'thn_terbit' => $request->thn_terbit,
            'id_kategori' => $request->id_kategori,
            'stok' => $request->stok,
            // 'deskripsi' => $request->deskripsi,
            'gambar' => $img->hashName(),
        ]);
        return redirect('/buku');

        // $this->validate($request, [
            //     'gambar' => 'required|image|mimes:png,jpg,jpeg',
            // ]);
        // if ($request->hasFile('gambar')) {
        //     $img = $request->file('gambar');
        //     $img->storeAs('public/storage/image', $img->hashName());

        //     FacadesStorage::delete('public/storage/image/' . $request->gambar);
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adm = Admin::findorfail($id);
        $adm->delete();

        return back();
    }
}
