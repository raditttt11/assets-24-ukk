<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class UlasController extends Controller
{
    public function index() {

        $ulas = Ulasan::latest()->pagination(5);
        $buku = Admin::get();
        return view('dashboard.buku',[
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku
        ]);
    }


    public function create() {
        $ulas = Ulasan::get();
        $buku = Admin::get();
        $user = User::get();

        return view('admin.ulas', [
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku,
            'ulas' => $ulas,
            'user' => $user,
        ]);
    }


    public function store(Request $request) {
        $validateData = $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'ulasan' => 'nullable|max:255',
            'rating' => 'required',
        ]);

        if($validateData){
            Ulasan::create($validateData);
            return redirect('dashboard.buku');
        }
        return redirect()->back();
    }



    public function edit() {
        $ulas = Ulasan::where('id','$id')->first();
        $buku = Admin::get();
        $user = User::get();
        $ulas = Ulasan::get();
        $ulas1 = Ulasan::get();

        return view('admin.edit-ulas', [
            'title' => 'Buku',
            'active' => 'buku',
            'buku' => $buku,
            'ulas' => $ulas,
            'ulas1' => $ulas1,
            'user' => $user,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'ulasan' => 'nullable|max:255',
            'rating' => 'nullable',
        ]);
        $ulas = Ulasan::where('id',$id)->update($validateData);
        return $this->index();
    }

    public function destroy(string $id)
    {
        $ulas = Ulasan::FindOrFail($id);

        // delete
        $ulas->delete();

        // redirect
        return redirect('dashboard.buku');
    }
}
