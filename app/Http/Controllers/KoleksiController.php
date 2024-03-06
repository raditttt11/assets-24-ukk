<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Koleksi;
use App\Models\User;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $koleksi = Koleksi::where('id_user',auth()->user()->id)->paginate(5);
        $user = User::get();
        $buku = Admin::get();
        return view('dashboard.koleksi', compact('koleksi'),[
            'title' => 'Koleksi',
            'active' => 'koleksi',
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
        ]);

        $koleksi = Koleksi::create($validateData);

        return redirect('/koleksi');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $koleksi = Koleksi::findOrFail($id);

        // Delete Post
        $koleksi->delete();

        return redirect('/koleksi');
    }
}
