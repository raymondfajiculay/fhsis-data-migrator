<?php

namespace App\Imports;

use App\Models\Child_Care;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Exception;

class Child_CareImport implements ToCollection, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $dateValue = $row[4]; // assuming the date is in this index

            try {
                // Parse and convert to 'YYYY-MM-DD' format for MySQL
                $date = Carbon::createFromFormat('m/d/y', $dateValue); // Create a date object from 'mm/dd/yy'
                $mysqlDate = $date->format('Y-m-d'); // Format it to 'YYYY-MM-DD'

            } catch (Exception $e) {
                // Skip column if error
                continue;
            }

            Child_Care::create([
                'REG_CODE' => $row[0],
                'PROV_CODE' => $row[1],
                'MUN_CODE' => $row[2],
                'BGY_CODE' => $row[3],
                'DATE' => $mysqlDate,
                'IMM_BCG_M' => $row[5],
                'IMM_BCG_F' => $row[6],
                'IMM_DPT1_M' => $row[7],
                'IMM_DPT1_F' => $row[8],
                'IMM_DPT2_M' => $row[9],
                'IMM_DPT2_F' => $row[10],
                'IMM_DPT3_M' => $row[11],
                'IMM_DPT3_F' => $row[12],
                'IMM_OPV1_M' => $row[13],
                'IMM_OPV1_F' => $row[14],
                'IMM_OPV2_M' => $row[15],
                'IMM_OPV2_F' => $row[16],
                'IMM_OPV3_M' => $row[17],
                'IMM_OPV3_F' => $row[18],
                'IMM_HEPAB1WIN24_M' => $row[19],
                'IMM_HEPAB1WIN24_F' => $row[20],
                'IMM_HEPAB124_M' => $row[21],
                'IMM_HEPAB124_F' => $row[22],
                'IMM_HEPAB2_M' => $row[23],
                'IMM_HEPAB2_F' => $row[24],
                'IMM_HEPAB3_M' => $row[25],
                'IMM_HEPAB3_F' => $row[26],
                'IMM_MEAS_M' => $row[27],
                'IMM_MEAS_F' => $row[28],
                'FIC_M' => $row[29],
                'FIC_F' => $row[30],
                'CIC_M' => $row[31],
                'CIC_F' => $row[32],
                'CPB_M' => $row[33],
                'CPB_F' => $row[34],
                'INF_AGE_M' => $row[35],
                'INF_AGE_F' => $row[36],
                'INF_BREAST_M' => $row[37],
                'INF_BREAST_F' => $row[38],
                'INF_NEWBS_M' => $row[39],
                'INF_NEWBS_F' => $row[40],
                'INF_VITA611_M' => $row[41],
                'INF_VITA611_F' => $row[42],
                'INF_VITA1259_M' => $row[43],
                'INF_VITA1259_F' => $row[44],
                'INF_VITA6071_M' => $row[45],
                'INF_VITA6071_F' => $row[46],
                'SICK_611_M' => $row[47],
                'SICK_611_F' => $row[48],
                'SICK_1259_M' => $row[49],
                'SICK_1259_F' => $row[50],
                'SICK_6071_M' => $row[51],
                'SICK_6071_F' => $row[52],
                'SICKVITA_611_M' => $row[53],
                'SICKVITA_611_F' => $row[54],
                'SICKVITA_1259_M' => $row[55],
                'SICKVITA_1259_F' => $row[56],
                'SICKVITA_6071_M' => $row[57],
                'SICKVITA_6071_F' => $row[58],
                'INF26LBWNS_M' => $row[59],
                'INF26LBWNS_F' => $row[60],
                'INF26FE_M' => $row[61],
                'INF26FE_F' => $row[62],
                'ANECHILDNS_M' => $row[63],
                'ANECHILDNS_F' => $row[64],
                'ANECHILDFE_M' => $row[65],
                'ANECHILDFE_F' => $row[66],
                'DIARRNC_M' => $row[67],
                'DIARRNC_F' => $row[68],
                'DIARRORT_M' => $row[69],
                'DIARRORT_F' => $row[70],
                'DIARRORS_M' => $row[71],
                'DIARRORS_F' => $row[72],
                'DIARRORSZ_M' => $row[73],
                'DIARRORSZ_F' => $row[74],
                'PNEUNC_M' => $row[75],
                'PNEUNC_F' => $row[76],
                'PNEUGT_M' => $row[77],
                'PNEUGT_F' => $row[78],
                'IMM_PENTA1_M' => $row[79],
                'IMM_PENTA1_F' => $row[80],
                'IMM_PENTA2_M' => $row[81],
                'IMM_PENTA2_F' => $row[82],
                'IMM_PENTA3_M' => $row[83],
                'IMM_PENTA3_F' => $row[84],
                'IMM_MCV1_M' => $row[85],
                'IMM_MCV1_F' => $row[86],
                'IMM_MCV2_M' => $row[87],
                'IMM_MCV2_F' => $row[88],
                'IMM_ROTA1_M' => $row[89],
                'IMM_ROTA1_F' => $row[90],
                'IMM_ROTA2_M' => $row[91],
                'IMM_ROTA2_F' => $row[92],
                'IMM_ROTA3_M' => $row[93],
                'IMM_ROTA3_F' => $row[94],
                'IMM_PCV1_M' => $row[95],
                'IMM_PCV1_F' => $row[96],
                'IMM_PCV2_M' => $row[97],
                'IMM_PCV2_F' => $row[98],
                'IMM_PCV3_M' => $row[99],
                'IMM_PCV3_F' => $row[100],
                'INF_FOOD_M' => $row[101],
                'INF_FOOD_F' => $row[102],
                'INF611FE_M' => $row[103],
                'INF611FE_F' => $row[104],
                'INF1259FE_M' => $row[105],
                'INF1259FE_F' => $row[106],
                'INF611MNP_M' => $row[107],
                'INF611MNP_F' => $row[108],
                'INF1223MNP_M' => $row[109],
                'INF1223MNP_F' => $row[110],
                'CHILD_1259DW_M' => $row[111],
                'CHILD_1259DW_F' => $row[112],
                'INF25LBWFE_M' => $row[113],
                'INF25LBWFE_F' => $row[114],
                'INF25LBWNS_M' => $row[115],
                'INF25LBWNS_F' => $row[116],
                'ANECHILD611_M' => $row[117],
                'ANECHILD611_F' => $row[118],
                'ANECHILD611FE_M' => $row[119],
                'ANECHILD611FE_F' => $row[120],
                'ANECHILD1259_M' => $row[121],
                'ANECHILD1259_F' => $row[122],
                'ANECHILD1259FE_M' => $row[123],
                'ANECHILD1259FE_F' => $row[124],
                'TD1_M' => $row[125],
                'TD1_F' => $row[126],
                'MR1_M' => $row[127],
                'MR1_F' => $row[128],
                'TD7_M' => $row[129],
                'TD7_F' => $row[130],
                'MR7_M' => $row[131],
                'MR7_F' => $row[132],
                'INF_BREAST90_M' => $row[133],
                'INF_BREAST90_F' => $row[134],
                'INF_FOODONLY_M' => $row[135],
                'INF_FOODONLY_F' => $row[136],
                'DWPSAC_M' => $row[137],
                'DWPSAC_F' => $row[138],
                'DWSAC_M' => $row[139],
                'DWSAC_F' => $row[140],
                'DW1019_M' => $row[141],
                'DW1019_F' => $row[142],
                'IMM_IPV_M' => $row[143],
                'IMM_IPV_F' => $row[144],
                'STUNTED059_M' => $row[145],
                'STUNTED059_F' => $row[146],
                'WASTEDMAM059_M' => $row[147],
                'WASTEDMAM059_F' => $row[148],
                'WASTEDSAM059_M' => $row[149],
                'WASTEDSAM059_F' => $row[150],
                'OBESE059_M' => $row[151],
                'OBESE059_F' => $row[152],
                'NORMWT059_M' => $row[153],
                'NORMWT059_F' => $row[154],
                'GR1ENROLL_M' => $row[155],
                'GR1ENROLL_F' => $row[156],
                'GR7ENROLL_M' => $row[157],
                'GR7ENROLL_F' => $row[158],
                'DWPSACSB_M' => $row[159],
                'DWPSACSB_F' => $row[160],
                'DWSACSB_M' => $row[161],
                'DWSACSB_F' => $row[162],
                'DW1019SB_M' => $row[163],
                'DW1019SB_F' => $row[164],
                'INF_BREASTA_M' => $row[165],
                'INF_BREASTA_F' => $row[166],
                'INF_FOODA_M' => $row[167],
                'INF_FOODA_F' => $row[168],
            ]);
        }
    }

    public function startRow(): int
    {
        return 1; // This starts reading from the second row, skipping the header
    }
}
