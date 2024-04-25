<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FP_Record extends Model
{
    use HasFactory;

    protected $table = 'fprecord';

    protected $fillable = [
        'REG_CODE',
        'PROV_CODE',
        'MUN_CODE',
        'BGY_CODE',
        'DATE',
        'PREV_FS',
        'PREV_MS',
        'PREV_PILLS',
        'PREV_IUD',
        'PREV_DMPA',
        'PREV_NFPCM',
        'PREV_NFPBBT',
        'PREV_NFPLAM',
        'PREV_NFPSDM',
        'PREV_NFPSTM',
        'PREV_CONDOM',
        'PREV_CONDOM_F',
        'PREV_IMPLANT',
        'PREV_PILLS_COC',
        'PREV_IUDPP',
        'TNA_FS',
        'TNA_MS',
        'TNA_PILLS',
        'TNA_IUD',
        'TNA_DMPA',
        'TNA_NFPCM',
        'TNA_NFPBBT',
        'TNA_NFPLAM',
        'TNA_NFPSDM',
        'TNA_NFPSTM',
        'TNA_CONDOM',
        'TNA_CONDOM_F',
        'TNA_IMPLANT',
        'TNA_PILLS_COC',
        'TNA_IUDPP',
        'TOA_FS',
        'TOA_MS',
        'TOA_PILLS',
        'TOA_IUD',
        'TOA_DMPA',
        'TOA_NFPCM',
        'TOA_NFPBBT',
        'TOA_NFPLAM',
        'TOA_NFPSDM',
        'TOA_NFPSTM',
        'TOA_CONDOM',
        'TOA_CONDOM_F',
        'TOA_IMPLANT',
        'TOA_PILLS_COC',
        'TOA_IUDPP',
        'TDO_FS',
        'TDO_MS',
        'TDO_PILLS',
        'TDO_IUD',
        'TDO_DMPA',
        'TDO_NFPCM',
        'TDO_NFPBBT',
        'TDO_NFPLAM',
        'TDO_NFPSDM',
        'TDO_NFPSTM',
        'TDO_CONDOM',
        'TDO_CONDOM_F',
        'TDO_IMPLANT',
        'TDO_PILLS_COC',
        'TDO_IUDPP',
        'TCU_FS',
        'TCU_MS',
        'TCU_PILLS',
        'TCU_IUD',
        'TCU_DMPA',
        'TCU_NFPCM',
        'TCU_NFPBBT',
        'TCU_NFPLAM',
        'TCU_NFPSDM',
        'TCU_NFPSTM',
        'TCU_CONDOM',
        'TCU_CONDOM_F',
        'TCU_IMPLANT',
        'TCU_PILLS_COC',
        'TCU_IUDPP',
        'TEMP_FS',
        'TEMP_MS',
        'TEMP_PILLS',
        'TEMP_IUD',
        'TEMP_DMPA',
        'TEMP_NFPCM',
        'TEMP_NFPBBT',
        'TEMP_NFPLAM',
        'TEMP_NFPSDM',
        'TEMP_NFPSTM',
        'TEMP_CONDOM',
        'TEMP_CONDOM_F',
        'TEMP_IMPLANT',
        'TEMP_PILLS_COC',
        'TEMP_IUDPP'
    ];
}
