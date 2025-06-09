<?php

namespace App\Exports;

use App\Models\Ceramic;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExports implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Ceramic::all();
    }
}
