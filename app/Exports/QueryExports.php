<?php

namespace App\Exports;

use App\Models\Ceramic;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;



class QueryExports implements FromQuery
{
    use Exportable;


    public function __construct(int $collection_id, int $start, int $end)
    {
        $this->collection_id = $collection_id;
        $this->start = $start;
        $this->end = $end;
    }

    public function query()
    {

        return Ceramic::query()->where('collection_id', $this->collection_id)
            ->whereBetween('start_date', [$this->start, $this->end]);
    }
}
