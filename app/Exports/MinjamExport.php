<?php

namespace App\Exports;

use App\Models\Minjam;
use Maatwebsite\Excel\Concerns\FromCollection;

class MinjamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Minjam::all();
    }
}
