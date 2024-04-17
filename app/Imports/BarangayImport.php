<?php

namespace App\Imports;

use App\Models\Barangay;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class BarangayImport implements ToCollection
{
    /**
    * @param Collection $collection
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row){
            Barangay::create([
                'bgy_code' => $row[1],
                'bgy_desc' => $row[2],
            ]);
        }
    }
}
