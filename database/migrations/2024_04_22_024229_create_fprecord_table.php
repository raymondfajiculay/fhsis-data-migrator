<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('AGE');
            $table->date('DATE');

            // PREV fields
            $table->smallInteger('PREV_FS')->default(0);
            $table->smallInteger('PREV_MS')->default(0);
            $table->smallInteger('PREV_PILLS')->default(0);
            $table->smallInteger('PREV_IUD')->default(0);
            $table->smallInteger('PREV_DMPA')->default(0);
            $table->smallInteger('PREV_NFPCM')->default(0);
            $table->smallInteger('PREV_NFPBBT')->default(0);
            $table->smallInteger('PREV_NFPLAM')->default(0);
            $table->smallInteger('PREV_NFPSDM')->default(0);
            $table->smallInteger('PREV_NFPSTM')->default(0);
            $table->smallInteger('PREV_CONDOM')->default(0);
            $table->smallInteger('PREV_CONDOM_F')->default(0);
            $table->smallInteger('PREV_IMPLANT')->default(0);
            $table->smallInteger('PREV_PILLS_COC')->default(0);
            $table->smallInteger('PREV_IUDPP')->default(0);

            // TNA fields
            $table->smallInteger('TNA_FS')->default(0);
            $table->smallInteger('TNA_MS')->default(0);
            $table->smallInteger('TNA_PILLS')->default(0);
            $table->smallInteger('TNA_IUD')->default(0);
            $table->smallInteger('TNA_DMPA')->default(0);
            $table->smallInteger('TNA_NFPCM')->default(0);
            $table->smallInteger('TNA_NFPBBT')->default(0);
            $table->smallInteger('TNA_NFPLAM')->default(0);
            $table->smallInteger('TNA_NFPSDM')->default(0);
            $table->smallInteger('TNA_NFPSTM')->default(0);
            $table->smallInteger('TNA_CONDOM')->default(0);
            $table->smallInteger('TNA_CONDOM_F')->default(0);
            $table->smallInteger('TNA_IMPLANT')->default(0);
            $table->smallInteger('TNA_PILLS_COC')->default(0);
            $table->smallInteger('TNA_IUDPP')->default(0);

            // TOA fields
            $table->smallInteger('TOA_FS')->default(0);
            $table->smallInteger('TOA_MS')->default(0);
            $table->smallInteger('TOA_PILLS')->default(0);
            $table->smallInteger('TOA_IUD')->default(0);
            $table->smallInteger('TOA_DMPA')->default(0);
            $table->smallInteger('TOA_NFPCM')->default(0);
            $table->smallInteger('TOA_NFPBBT')->default(0);
            $table->smallInteger('TOA_NFPLAM')->default(0);
            $table->smallInteger('TOA_NFPSDM')->default(0);
            $table->smallInteger('TOA_NFPSTM')->default(0);
            $table->smallInteger('TOA_CONDOM')->default(0);
            $table->smallInteger('TOA_CONDOM_F')->default(0);
            $table->smallInteger('TOA_IMPLANT')->default(0);
            $table->smallInteger('TOA_PILLS_COC')->default(0);
            $table->smallInteger('TOA_IUDPP')->default(0);

            // TDO fields
            $table->smallInteger('TDO_FS')->default(0);
            $table->smallInteger('TDO_MS')->default(0);
            $table->smallInteger('TDO_PILLS')->default(0);
            $table->smallInteger('TDO_IUD')->default(0);
            $table->smallInteger('TDO_DMPA')->default(0);
            $table->smallInteger('TDO_NFPCM')->default(0);
            $table->smallInteger('TDO_NFPBBT')->default(0);
            $table->smallInteger('TDO_NFPLAM')->default(0);
            $table->smallInteger('TDO_NFPSDM')->default(0);
            $table->smallInteger('TDO_NFPSTM')->default(0);
            $table->smallInteger('TDO_CONDOM')->default(0);
            $table->smallInteger('TDO_CONDOM_F')->default(0);
            $table->smallInteger('TDO_IMPLANT')->default(0);
            $table->smallInteger('TDO_PILLS_COC')->default(0);
            $table->smallInteger('TDO_IUDPP')->default(0);

            // TCU fields
            $table->smallInteger('TCU_FS')->default(0);
            $table->smallInteger('TCU_MS')->default(0);
            $table->smallInteger('TCU_PILLS')->default(0);
            $table->smallInteger('TCU_IUD')->default(0);
            $table->smallInteger('TCU_DMPA')->default(0);
            $table->smallInteger('TCU_NFPCM')->default(0);
            $table->smallInteger('TCU_NFPBBT')->default(0);
            $table->smallInteger('TCU_NFPLAM')->default(0);
            $table->smallInteger('TCU_NFPSDM')->default(0);
            $table->smallInteger('TCU_NFPSTM')->default(0);
            $table->smallInteger('TCU_CONDOM')->default(0);
            $table->smallInteger('TCU_CONDOM_F')->default(0);
            $table->smallInteger('TCU_IMPLANT')->default(0);
            $table->smallInteger('TCU_PILLS_COC')->default(0);
            $table->smallInteger('TCU_IUDPP')->default(0);

            // TEMP fields
            $table->smallInteger('TEMP_FS')->default(0);
            $table->smallInteger('TEMP_MS')->default(0);
            $table->smallInteger('TEMP_PILLS')->default(0);
            $table->smallInteger('TEMP_IUD')->default(0);
            $table->smallInteger('TEMP_DMPA')->default(0);
            $table->smallInteger('TEMP_NFPCM')->default(0);
            $table->smallInteger('TEMP_NFPBBT')->default(0);
            $table->smallInteger('TEMP_NFPLAM')->default(0);
            $table->smallInteger('TEMP_NFPSDM')->default(0);
            $table->smallInteger('TEMP_NFPSTM')->default(0);
            $table->smallInteger('TEMP_CONDOM')->default(0);
            $table->smallInteger('TEMP_CONDOM_F')->default(0);
            $table->smallInteger('TEMP_IMPLANT')->default(0);
            $table->smallInteger('TEMP_PILLS_COC')->default(0);
            $table->smallInteger('TEMP_IUDPP')->default(0);
            
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
