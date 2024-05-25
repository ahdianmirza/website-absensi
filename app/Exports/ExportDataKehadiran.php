<?php

namespace App\Exports;

use App\Models\DataKehadiran;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportDataKehadiran implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = DataKehadiran::orderBy('created_at', 'asc')->get();
        return view('dataKehadiran.table', [
            'dataKehadiran' => $data
        ]);
    }
}