<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataKehadiran;
use Illuminate\Http\Request;

class DataKehadiranController extends Controller
{
    public function index() {
        return view('dataKehadiran.index', [
            'title' => 'Data Kehadiran',
            'dataKehadiran' => DataKehadiran::filter(request(['search', 'sort']))->paginate(25)->withQueryString()
        ]);
    }
}