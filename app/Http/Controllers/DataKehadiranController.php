<?php

namespace App\Http\Controllers;

use App\Exports\ExportDataKehadiran;
use App\Http\Controllers\Controller;
use App\Models\DataKehadiran;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataKehadiranController extends Controller
{
    public function index() {
        return view('dataKehadiran.index', [
            'title' => 'Data Kehadiran',
            'dataKehadiran' => DataKehadiran::filter(request(['search', 'sort']))->paginate(25)->withQueryString()
        ]);
    }

    public function export_excel() {
        return Excel::download(new ExportDataKehadiran, "Data Kehadiran IFCC.xlsx");
    }

    public function tableDataKehadiran() {
        return view('dataKehadiran.table', [
            'title' => 'Table Kehadiran',
            'dataKehadiran' => DataKehadiran::orderBy('created_at', 'asc')->get()
        ]);
    }
}