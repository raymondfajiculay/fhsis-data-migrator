<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child_Care extends Model
{
    use HasFactory;

    protected $table = 'childcare';

    protected $fillable = [
        'REG_CODE',
        'PROV_CODE',
        'MUN_CODE',
        'BGY_CODE',
        'DATE',
        'IMM_BCG_M',
        'IMM_BCG_F',
        'IMM_DPT1_M',
        'IMM_DPT1_F',
        'IMM_DPT2_M',
        'IMM_DPT2_F',
        'IMM_DPT3_M',
        'IMM_DPT3_F',
        'IMM_OPV1_M',
        'IMM_OPV1_F',
        'IMM_OPV2_M',
        'IMM_OPV2_F',
        'IMM_OPV3_M',
        'IMM_OPV3_F',
        'IMM_HEPAB1WIN24_M',
        'IMM_HEPAB1WIN24_F',
        'IMM_HEPAB124_M',
        'IMM_HEPAB124_F',
        'IMM_HEPAB2_M',
        'IMM_HEPAB2_F',
        'IMM_HEPAB3_M',
        'IMM_HEPAB3_F',
        'IMM_MEAS_M',
        'IMM_MEAS_F',
        'FIC_M',
        'FIC_F',
        'CIC_M',
        'CIC_F',
        'CPB_M',
        'CPB_F',
        'INF_AGE_M',
        'INF_AGE_F',
        'INF_BREAST_M',
        'INF_BREAST_F',
        'INF_NEWBS_M',
        'INF_NEWBS_F',
        'INF_VITA611_M',
        'INF_VITA611_F',
        'INF_VITA1259_M',
        'INF_VITA1259_F',
        'INF_VITA6071_M',
        'INF_VITA6071_F',
        'SICK_611_M',
        'SICK_611_F',
        'SICK_1259_M',
        'SICK_1259_F',
        'SICK_6071_M',
        'SICK_6071_F',
        'SICKVITA_611_M',
        'SICKVITA_611_F',
        'SICKVITA_1259_M',
        'SICKVITA_1259_F',
        'SICKVITA_6071_M',
        'SICKVITA_6071_F',
        'INF26LBWNS_M',
        'INF26LBWNS_F',
        'INF26FE_M',
        'INF26FE_F',
        'ANECHILDNS_M',
        'ANECHILDNS_F',
        'ANECHILDFE_M',
        'ANECHILDFE_F',
        'DIARRNC_M',
        'DIARRNC_F',
        'DIARRORT_M',
        'DIARRORT_F',
        'DIARRORS_M',
        'DIARRORS_F',
        'DIARRORSZ_M',
        'DIARRORSZ_F',
        'PNEUNC_M',
        'PNEUNC_F',
        'PNEUGT_M',
        'PNEUGT_F',
        'IMM_PENTA1_M',
        'IMM_PENTA1_F',
        'IMM_PENTA2_M',
        'IMM_PENTA2_F',
        'IMM_PENTA3_M',
        'IMM_PENTA3_F',
        'IMM_MCV1_M',
        'IMM_MCV1_F',
        'IMM_MCV2_M',
        'IMM_MCV2_F',
        'IMM_ROTA1_M',
        'IMM_ROTA1_F',
        'IMM_ROTA2_M',
        'IMM_ROTA2_F',
        'IMM_ROTA3_M',
        'IMM_ROTA3_F',
        'IMM_PCV1_M',
        'IMM_PCV1_F',
        'IMM_PCV2_M',
        'IMM_PCV2_F',
        'IMM_PCV3_M',
        'IMM_PCV3_F',
        'INF_FOOD_M',
        'INF_FOOD_F',
        'INF611FE_M',
        'INF611FE_F',
        'INF1259FE_M',
        'INF1259FE_F',
        'INF611MNP_M',
        'INF611MNP_F',
        'INF1223MNP_M',
        'INF1223MNP_F',
        'CHILD_1259DW_M',
        'CHILD_1259DW_F',
        'INF25LBWFE_M',
        'INF25LBWFE_F',
        'INF25LBWNS_M',
        'INF25LBWNS_F',
        'ANECHILD611_M',
        'ANECHILD611_F',
        'ANECHILD611FE_M',
        'ANECHILD611FE_F',
        'ANECHILD1259_M',
        'ANECHILD1259_F',
        'ANECHILD1259FE_M',
        'ANECHILD1259FE_F',
        'TD1_M',
        'TD1_F',
        'MR1_M',
        'MR1_F',
        'TD7_M',
        'TD7_F',
        'MR7_M',
        'MR7_F',
        'INF_BREAST90_M',
        'INF_BREAST90_F',
        'INF_FOODONLY_M',
        'INF_FOODONLY_F',
        'DWPSAC_M',
        'DWPSAC_F',
        'DWSAC_M',
        'DWSAC_F',
        'DW1019_M',
        'DW1019_F',
        'IMM_IPV_M',
        'IMM_IPV_F',
        'STUNTED059_M',
        'STUNTED059_F',
        'WASTEDMAM059_M',
        'WASTEDMAM059CURE_M',
        'WASTEDMAM059DEF_M',
        'WASTEDMAM059DIED_M',
        'WASTEDMAM059DIS_M',
        'WASTEDMAM059ID_M',
        'WASTEDMAM059_F',
        'WASTEDSAM059_M',
        'WASTEDSAM059_F',
        'OBESE059_M',
        'OBESE059_F',
        'NORMWT059_M',
        'NORMWT059_F',
        'GR1ENROLL_M',
        'GR1ENROLL_F',
        'GR7ENROLL_M',
        'GR7ENROLL_F',
        'DWPSACSB_M',
        'DWPSACSB_F',
        'DWSACSB_M',
        'DWSACSB_F',
        'DW1019SB_M',
        'DW1019SB_F',
        'INF_BREASTA_M',
        'INF_BREASTA_F',
        'INF_FOODA_M',
        'INF_FOODA_F',
    ];
}
