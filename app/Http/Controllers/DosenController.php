<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function store(Request $request)
    {
        Dosen::create($request->only('namaDsn', 'nid', 'matkul'));
        return redirect()->back();
    }

    // edit
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaDsn' => 'required',
            'nid' => 'required',
            'matkul' => 'required'
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->only('namaDsn', 'nid', 'matkul'));

        return redirect()->route('dosen.index')->with('success','Data berhasil diupdate!');
    }

    // Delete
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus!');
}}