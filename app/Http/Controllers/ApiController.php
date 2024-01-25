<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function dataAbsensi() {
        $dataAbsensi = request()->all();
        $uid = $dataAbsensi['uid'];
        $dataKaryawan = Karyawan::firstWhere('uid', $uid);

        if ($dataKaryawan) {
            Kehadiran::create([
                'name' => $dataKaryawan->name,
                'uid' => $dataKaryawan->uid,
                'jabatan' => $dataKaryawan->jabatan,
            ]);
            return response()->json(['response' => 'OK']);
        } else {
            return response()->json(['response' => 'No OK']);
        }
        
    }

    public function indexDataAbsensi() {
        $dataAbsensi = Kehadiran::all();
        return response()->json($dataAbsensi);
    }
}