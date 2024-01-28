<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index() {
        return view('karyawan.karyawan', [
            'title' => 'Karyawan',
            'dataKaryawan' => Karyawan::all()
        ]);
    }

    public function create() {
        return view('karyawan.create', [
            'title' => 'Tambah Karyawan'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'uid' => 'required|max:255',
            'jabatan' => 'required|max:255'
        ]);

        Karyawan::create($validatedData);
        return redirect('/karyawan/create')->with('success', 'Data berhasil dikirim!');
    }

    public function destroy($id) {
        $dataKaryawan = Karyawan::find($id)->delete();
        return redirect('/karyawan')->with('success', 'Data berhasil dihapus');
    }

    public function edit($id) {
        return view('karyawan.edit', [
            'title' => 'Edit Karyawan',
            'editKaryawan' => Karyawan::find($id)
        ]);
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'uid' => 'required|max:255',
            'jabatan' => 'required|max:255'
        ]);

        $updateKaryawan = Karyawan::find($id)->update($validatedData);
        return redirect('/karyawan')->with('success', 'Data berhasil diedit');
    }
}