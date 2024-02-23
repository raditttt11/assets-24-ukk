<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

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
        return view('admin.create');
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
            'stok' => $request->stok,
            'gambar' => $img->hashName(),
        ]);



        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adm = Admin::findorfail($id);
        return view('admin.edit', compact('adm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $adm = Admin::findorfail($id);
        $adm->update($request->all());
        return redirect('/buku');
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