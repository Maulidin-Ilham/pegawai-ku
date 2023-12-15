<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function index()
    {
        //
        $pegawais = Pegawai::all();

        return view('dashboard.pegawai.index', ['pegawais' => $pegawais]);
    }

    public function create()
    {

        return view('dashboard.pegawai.create');
    }

    public function store(Request $request)
    {

        // ambil input data
        $name = $request->input('name');
        $c1 = $request->input('c1');
        $c2 = $request->input('c2');
        $c3 = $request->input('c3');
        $c4 = $request->input('c4');
        $c5 = $request->input('c5');
        $c6 = $request->input('c6');
        $c7 = $request->input('c7');
        $c8 = $request->input('c8');
        $c9 = $request->input('c9');


        // inisisi data
        $pegawai = new Pegawai();
        $pegawai->name = $name;
        $pegawai->c1 = $c1;
        $pegawai->c2 = $c2;
        $pegawai->c3 = $c3;
        $pegawai->c4 = $c4;
        $pegawai->c5 = $c5;
        $pegawai->c6 = $c6;
        $pegawai->c7 = $c7;
        $pegawai->c8 = $c8;
        $pegawai->c9 = $c9;

        // simpan data ke database
        $pegawai->save();

        return redirect()->route("pegawai.index")->with('success', 'Pegawai added successfully');
    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {

        $pegawai = Pegawai::findOrFail($id);
        return view('dashboard.pegawai.edit', compact('pegawai'));
    }


    public function update(Request $request, string $id)
    {

        // ambil id data
        $pegawai = Pegawai::findOrFail($id);

        // ambil data berdasarkan id
        $pegawai->name = $request->input('name');
        $pegawai->c1 = $request->input('c1');
        $pegawai->c2 = $request->input('c2');
        $pegawai->c3 = $request->input('c3');
        $pegawai->c4 = $request->input('c4');
        $pegawai->c5 = $request->input('c5');
        $pegawai->c6 = $request->input('c6');
        $pegawai->c7 = $request->input('c7');
        $pegawai->c8 = $request->input('c8');
        $pegawai->c9 = $request->input('c9');

        // simpan data ke database
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai updated successfully');
    }

    public function destroy(Pegawai $pegawai)
    {
        // hapus data
        $pegawai->delete();

        return redirect()->route("pegawai.index")->with('success', 'Pegawai deleted successfully');
    }
}
