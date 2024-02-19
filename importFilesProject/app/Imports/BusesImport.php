<?php

namespace App\Imports;

use App\Models\Bus;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BusesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bus([
            'shofir_name' =>$row['shofir_name'],
            'number' =>$row['number'],
            'bus_number' =>$row['bus_number'],
            'capacity' =>$row['capacity']
        ]);
    }
}
