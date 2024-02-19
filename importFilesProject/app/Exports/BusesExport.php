<?php

namespace App\Exports;

use App\Models\Bus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BusesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bus::select('id','shofir_name','image','number','bus_number','capacity')->get();
    }

    public function headings(): array
    {
        return ["ID","shofir name","image","number","bus number","capacity"];
    }
}
