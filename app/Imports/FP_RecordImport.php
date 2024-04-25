<?php

namespace App\Imports;

use App\Models\FP_Record;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Carbon\Carbon;
use Exception;

class FP_RecordImport implements ToCollection, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $age; // Correctly declaring age property

    public function __construct($age)
    {
        $this->age = $age; // Store 'age' in a property
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row){
            $dateValue = $row[4]; // assuming the date is in this index
    
            try {
                // Parse and convert to 'YYYY-MM-DD' format for MySQL
                $date = Carbon::createFromFormat('m/d/y', $dateValue); // Create a date object from 'mm/dd/yy'
                $mysqlDate = $date->format('Y-m-d'); // Format it to 'YYYY-MM-DD'
            
            } catch (Exception $e) {
                // Skip column if error
                continue;
            }

            FP_Record::create([
                'REG_CODE' => $row[0],
                'PROV_CODE' => $row[1],
                'MUN_CODE' => $row[2],
                'BGY_CODE' => $row[3],
                'AGE' => $this->age, // Fix for property reference
                'DATE' => $mysqlDate,
                'PREV_FS' => $row[5],
                'PREV_MS' => $row[6],
                'PREV_PILLS' => $row[7],
                'PREV_IUD' => $row[8],
                'PREV_DMPA' => $row[9],
                'PREV_NFPCM' => $row[10],
                'PREV_NFPBBT' => $row[11],
                'PREV_NFPLAM' => $row[12],
                'PREV_NFPSDM' => $row[13],
                'PREV_NFPSTM' => $row[14],
                'PREV_CONDOM' => $row[15],
                'PREV_CONDOM_F' => $row[16],
                'PREV_IMPLANT' => $row[17],
                'PREV_PILLS_COC' => $row[18],
                'PREV_IUDPP' => $row[19],
                'TNA_FS' => $row[20],
                'TNA_MS' => $row[21],
                'TNA_PILLS' => $row[22],
                'TNA_IUD' => $row[23],
                'TNA_DMPA' => $row[24],
                'TNA_NFPCM' => $row[25],
                'TNA_NFPBBT' => $row[26],
                'TNA_NFPLAM' => $row[27],
                'TNA_NFPSDM' => $row[28],
                'TNA_NFPSTM' => $row[29],
                'TNA_CONDOM' => $row[30],
                'TNA_CONDOM_F' => $row[31],
                'TNA_IMPLANT' => $row[32],
                'TNA_PILLS_COC' => $row[33],
                'TNA_IUDPP' => $row[34],
                'TOA_FS' => $row[35],
                'TOA_MS' => $row[36],
                'TOA_PILLS' => $row[37],
                'TOA_IUD' => $row[38],
                'TOA_DMPA' => $row[39],
                'TOA_NFPCM' => $row[40],
                'TOA_NFPBBT' => $row[41],
                'TOA_NFPLAM' => $row[42],
                'TOA_NFPSDM' => $row[43],
                'TOA_NFPSTM' => $row[44],
                'TOA_CONDOM' => $row[45],
                'TOA_CONDOM_F' => $row[46],
                'TOA_IMPLANT' => $row[47],
                'TOA_PILLS_COC' => $row[48],
                'TOA_IUDPP' => $row[49],
                'TDO_FS' => $row[50],
                'TDO_MS' => $row[51],
                'TDO_PILLS' => $row[52],
                'TDO_IUD' => $row[53],
                'TDO_DMPA' => $row[54],
                'TDO_NFPCM' => $row[55],
                'TDO_NFPBBT' => $row[56],
                'TDO_NFPLAM' => $row[57],
                'TDO_NFPSDM' => $row[58],
                'TDO_NFPSTM' => $row[59],
                'TDO_CONDOM' => $row[60],
                'TDO_CONDOM_F' => $row[61],
                'TDO_IMPLANT' => $row[62],
                'TDO_PILLS_COC' => $row[63],
                'TDO_IUDPP' => $row[64],
                'TCU_FS' => $row[65],
                'TCU_MS' => $row[66],
                'TCU_PILLS' => $row[67],
                'TCU_IUD' => $row[68],
                'TCU_DMPA' => $row[69],
                'TCU_NFPCM' => $row[70],
                'TCU_NFPBBT' => $row[71],
                'TCU_NFPLAM' => $row[72],
                'TCU_NFPSDM' => $row[73],
                'TCU_NFPSTM' => $row[74],
                'TCU_CONDOM' => $row[75],
                'TCU_CONDOM_F' => $row[76],
                'TCU_IMPLANT' => $row[77],
                'TCU_PILLS_COC' => $row[78],
                'TCU_IUDPP' => $row[79],
                'TEMP_FS' => $row[80],
                'TEMP_MS' => $row[81],
                'TEMP_PILLS' => $row[82],
                'TEMP_IUD' => $row[83],
                'TEMP_DMPA' => $row[84],
                'TEMP_NFPCM' => $row[85],
                'TEMP_NFPBBT' => $row[86],
                'TEMP_NFPLAM' => $row[87],
                'TEMP_NFPSDM' => $row[88],
                'TEMP_NFPSTM' => $row[89],
                'TEMP_CONDOM' => $row[90],
                'TEMP_CONDOM_F' => $row[91],
                'TEMP_IMPLANT' => $row[92],
                'TEMP_PILLS_COC' => $row[93],
                'TEMP_IUDPP' => $row[94]
            ]);
        }
    }

    public function startRow(): int
    {
        return 1; // This starts reading from the second row, skipping the header
    }
}
