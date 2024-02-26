<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Minjam;
use Illuminate\Http\Request;

class MinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $minjam = Minjam::all();
        return view('dashboard.minjam', compact('minjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Admin::get();
        return view('admin.create-peminjam', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Minjam::create([
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status' => $request->status,
            'peminjam' => $request->peminjam,
            'id_buku' => $request->id_buku,
        ]);
        return redirect('/minjam');
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
        $pmjm = Minjam::findorfail($id);
        return view('admin.edit-minjam', compact('pmjm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $pmjm = Minjam::findorfail($id);
        $pmjm->update($request->all());
        return redirect('/minjam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pmjm = Minjam::findorfail($id);
        $pmjm->delete();
        return back();
    }
}