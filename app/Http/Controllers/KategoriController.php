<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kategori::all();
        return view("dashboard.kategori", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create-kategori");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kategori::create([
            'kategori' => $request->kategori,
        ]);
        return redirect('index');
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
        $ktgri = kategori::findorfail($id);
        return view('admin.edit-kategori', compact('ktgri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ktgri = kategori::findorfail($id);
        $ktgri->update($request->all());
        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ktgri = kategori::findorfail($id);
        $ktgri->delete();

        return back()->with('message-danger', 'Data Berhasil Di Hapuss');
    }
}
