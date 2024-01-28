<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function dataAbsensi(Request $request) {
        $dataAbsensi = $request->all();
        $uid = $dataAbsensi['uid'];
        $dataKaryawan = Karyawan::firstWhere('uid', $uid);
        $dataKehadiran = Kehadiran::firstWhere('uid', $uid);

        if ($dataKehadiran) {
            if ($dataKehadiran['uid'] == $uid) {
                return response()->json('Duplicate');
            }
        }

        if ($dataKaryawan) {
            Kehadiran::create([
                'name' => $dataKaryawan->name,
                'uid' => $dataKaryawan->uid,
                'jabatan' => $dataKaryawan->jabatan,
            ]);
            return response()->json('OK');
        } else {
            return response()->json('Failed');
        }
    }

    public function indexDataAbsensi() {
        $dataAbsensi = Kehadiran::all();
        return response()->json($dataAbsensi);
    }
}