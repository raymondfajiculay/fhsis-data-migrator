<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fprecord', function (Blueprint $table) {
            $table->id();
            $table->string('REG_CODE')->nullable();
            $table->string('PROV_CODE')->nullable();
            $table->string('MUN_CODE')->nullable();
            $table->string('BGY_CODE')->nullable();
            $table->date('DATE')->nullable();

            // PREV fields
            $table->tinyinteger('PREV_FS')->nullable();
            $table->tinyinteger('PREV_MS')->nullable();
            $table->tinyinteger('PREV_PILLS')->nullable();
            $table->tinyinteger('PREV_IUD')->nullable();
            $table->tinyinteger('PREV_DMPA')->nullable();
            $table->tinyinteger('PREV_NFPCM')->nullable();
            $table->tinyinteger('PREV_NFPBBT')->nullable();
            $table->tinyinteger('PREV_NFPLAM')->nullable();
            $table->tinyinteger('PREV_NFPSDM')->nullable();
            $table->tinyinteger('PREV_NFPSTM')->nullable();
            $table->tinyinteger('PREV_CONDOM')->nullable();
            $table->tinyinteger('PREV_CONDOM_F')->nullable();
            $table->tinyinteger('PREV_IMPLANT')->nullable();
            $table->tinyinteger('PREV_PILLS_COC')->nullable();
            $table->tinyinteger('PREV_IUDPP')->nullable();

            // TNA fields
            $table->tinyinteger('TNA_FS')->nullable();
            $table->tinyinteger('TNA_MS')->nullable();
            $table->tinyinteger('TNA_PILLS')->nullable();
            $table->tinyinteger('TNA_IUD')->nullable();
            $table->tinyinteger('TNA_DMPA')->nullable();
            $table->tinyinteger('TNA_NFPCM')->nullable();
            $table->tinyinteger('TNA_NFPBBT')->nullable();
            $table->tinyinteger('TNA_NFPLAM')->nullable();
            $table->tinyinteger('TNA_NFPSDM')->nullable();
            $table->tinyinteger('TNA_NFPSTM')->nullable();
            $table->tinyinteger('TNA_CONDOM')->nullable();
            $table->tinyinteger('TNA_CONDOM_F')->nullable();
            $table->tinyinteger('TNA_IMPLANT')->nullable();
            $table->tinyinteger('TNA_PILLS_COC')->nullable();
            $table->tinyinteger('TNA_IUDPP')->nullable();

            // TOA fields
            $table->tinyinteger('TOA_FS')->nullable();
            $table->tinyinteger('TOA_MS')->nullable();
            $table->tinyinteger('TOA_PILLS')->nullable();
            $table->tinyinteger('TOA_IUD')->nullable();
            $table->tinyinteger('TOA_DMPA')->nullable();
            $table->tinyinteger('TOA_NFPCM')->nullable();
            $table->tinyinteger('TOA_NFPBBT')->nullable();
            $table->tinyinteger('TOA_NFPLAM')->nullable();
            $table->tinyinteger('TOA_NFPSDM')->nullable();
            $table->tinyinteger('TOA_NFPSTM')->nullable();
            $table->tinyinteger('TOA_CONDOM')->nullable();
            $table->tinyinteger('TOA_CONDOM_F')->nullable();
            $table->tinyinteger('TOA_IMPLANT')->nullable();
            $table->tinyinteger('TOA_PILLS_COC')->nullable();
            $table->tinyinteger('TOA_IUDPP')->nullable();

            // TDO fields
            $table->tinyinteger('TDO_FS')->nullable();
            $table->tinyinteger('TDO_MS')->nullable();
            $table->tinyinteger('TDO_PILLS')->nullable();
            $table->tinyinteger('TDO_IUD')->nullable();
            $table->tinyinteger('TDO_DMPA')->nullable();
            $table->tinyinteger('TDO_NFPCM')->nullable();
            $table->tinyinteger('TDO_NFPBBT')->nullable();
            $table->tinyinteger('TDO_NFPLAM')->nullable();
            $table->tinyinteger('TDO_NFPSDM')->nullable();
            $table->tinyinteger('TDO_NFPSTM')->nullable();
            $table->tinyinteger('TDO_CONDOM')->nullable();
            $table->tinyinteger('TDO_CONDOM_F')->nullable();
            $table->tinyinteger('TDO_IMPLANT')->nullable();
            $table->tinyinteger('TDO_PILLS_COC')->nullable();
            $table->tinyinteger('TDO_IUDPP')->nullable();

            // TCU fields
            $table->tinyinteger('TCU_FS')->nullable();
            $table->tinyinteger('TCU_MS')->nullable();
            $table->tinyinteger('TCU_PILLS')->nullable();
            $table->tinyinteger('TCU_IUD')->nullable();
            $table->tinyinteger('TCU_DMPA')->nullable();
            $table->tinyinteger('TCU_NFPCM')->nullable();
            $table->tinyinteger('TCU_NFPBBT')->nullable();
            $table->tinyinteger('TCU_NFPLAM')->nullable();
            $table->tinyinteger('TCU_NFPSDM')->nullable();
            $table->tinyinteger('TCU_NFPSTM')->nullable();
            $table->tinyinteger('TCU_CONDOM')->nullable();
            $table->tinyinteger('TCU_CONDOM_F')->nullable();
            $table->tinyinteger('TCU_IMPLANT')->nullable();
            $table->tinyinteger('TCU_PILLS_COC')->nullable();
            $table->tinyinteger('TCU_IUDPP')->nullable();

            // TEMP fields
            $table->tinyinteger('TEMP_FS')->nullable();
            $table->tinyinteger('TEMP_MS')->nullable();
            $table->tinyinteger('TEMP_PILLS')->nullable();
            $table->tinyinteger('TEMP_IUD')->nullable();
            $table->tinyinteger('TEMP_DMPA')->nullable();
            $table->tinyinteger('TEMP_NFPCM')->nullable();
            $table->tinyinteger('TEMP_NFPBBT')->nullable();
            $table->tinyinteger('TEMP_NFPLAM')->nullable();
            $table->tinyinteger('TEMP_NFPSDM')->nullable();
            $table->tinyinteger('TEMP_NFPSTM')->nullable();
            $table->tinyinteger('TEMP_CONDOM')->nullable();
            $table->tinyinteger('TEMP_CONDOM_F')->nullable();
            $table->tinyinteger('TEMP_IMPLANT')->nullable();
            $table->tinyinteger('TEMP_PILLS_COC')->nullable();
            $table->tinyinteger('TEMP_IUDPP')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fprecord');
    }
};
