<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function index() {
        return view('kehadiran', [
            'title' => 'Dashboard',
            'dataKehadiran' => Kehadiran::all()
        ]);
    }
}