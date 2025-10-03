<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = MataKuliah::all();
        return view('mataKuliah.index', compact('data'));
    }

    public function store(Request $request)
    {
        MataKuliah::create($request->only('matkul', 'deskripsi'));
        return redirect()->back();
    }

    // edit
    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        return view('mataKuliah.edit', compact('mataKuliah'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'matkul' => 'required',
            'deskripsi' => 'required'
        ]);

        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->update($request->only('matkul', 'deskripsi'));

        return redirect()->route('mataKuliah.index')->with('success','Data berhasil diupdate!');
    }

    // Delete
    public function destroy($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->delete();

        return redirect()->route('mataKuliah.index')->with('success', 'Data berhasil dihapus!');
}}