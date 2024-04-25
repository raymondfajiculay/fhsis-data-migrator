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
            $table->string('AGE');
            $table->date('DATE');

            // PREV fields
            $table->tinyInteger('PREV_FS');
            $table->tinyInteger('PREV_MS');
            $table->tinyInteger('PREV_PILLS');
            $table->tinyInteger('PREV_IUD');
            $table->tinyInteger('PREV_DMPA');
            $table->tinyInteger('PREV_NFPCM');
            $table->tinyInteger('PREV_NFPBBT');
            $table->tinyInteger('PREV_NFPLAM');
            $table->tinyInteger('PREV_NFPSDM');
            $table->tinyInteger('PREV_NFPSTM');
            $table->tinyInteger('PREV_CONDOM');
            $table->tinyInteger('PREV_CONDOM_F');
            $table->tinyInteger('PREV_IMPLANT');
            $table->tinyInteger('PREV_PILLS_COC');
            $table->tinyInteger('PREV_IUDPP');

            // TNA fields
            $table->tinyInteger('TNA_FS');
            $table->tinyInteger('TNA_MS');
            $table->tinyInteger('TNA_PILLS');
            $table->tinyInteger('TNA_IUD');
            $table->tinyInteger('TNA_DMPA');
            $table->tinyInteger('TNA_NFPCM');
            $table->tinyInteger('TNA_NFPBBT');
            $table->tinyInteger('TNA_NFPLAM');
            $table->tinyInteger('TNA_NFPSDM');
            $table->tinyInteger('TNA_NFPSTM');
            $table->tinyInteger('TNA_CONDOM');
            $table->tinyInteger('TNA_CONDOM_F');
            $table->tinyInteger('TNA_IMPLANT');
            $table->tinyInteger('TNA_PILLS_COC');
            $table->tinyInteger('TNA_IUDPP');

            // TOA fields
            $table->tinyInteger('TOA_FS');
            $table->tinyInteger('TOA_MS');
            $table->tinyInteger('TOA_PILLS');
            $table->tinyInteger('TOA_IUD');
            $table->tinyInteger('TOA_DMPA');
            $table->tinyInteger('TOA_NFPCM');
            $table->tinyInteger('TOA_NFPBBT');
            $table->tinyInteger('TOA_NFPLAM');
            $table->tinyInteger('TOA_NFPSDM');
            $table->tinyInteger('TOA_NFPSTM');
            $table->tinyInteger('TOA_CONDOM');
            $table->tinyInteger('TOA_CONDOM_F');
            $table->tinyInteger('TOA_IMPLANT');
            $table->tinyInteger('TOA_PILLS_COC');
            $table->tinyInteger('TOA_IUDPP');

            // TDO fields
            $table->tinyInteger('TDO_FS');
            $table->tinyInteger('TDO_MS');
            $table->tinyInteger('TDO_PILLS');
            $table->tinyInteger('TDO_IUD');
            $table->tinyInteger('TDO_DMPA');
            $table->tinyInteger('TDO_NFPCM');
            $table->tinyInteger('TDO_NFPBBT');
            $table->tinyInteger('TDO_NFPLAM');
            $table->tinyInteger('TDO_NFPSDM');
            $table->tinyInteger('TDO_NFPSTM');
            $table->tinyInteger('TDO_CONDOM');
            $table->tinyInteger('TDO_CONDOM_F');
            $table->tinyInteger('TDO_IMPLANT');
            $table->tinyInteger('TDO_PILLS_COC');
            $table->tinyInteger('TDO_IUDPP');

            // TCU fields
            $table->tinyInteger('TCU_FS');
            $table->tinyInteger('TCU_MS');
            $table->tinyInteger('TCU_PILLS');
            $table->tinyInteger('TCU_IUD');
            $table->tinyInteger('TCU_DMPA');
            $table->tinyInteger('TCU_NFPCM');
            $table->tinyInteger('TCU_NFPBBT');
            $table->tinyInteger('TCU_NFPLAM');
            $table->tinyInteger('TCU_NFPSDM');
            $table->tinyInteger('TCU_NFPSTM');
            $table->tinyInteger('TCU_CONDOM');
            $table->tinyInteger('TCU_CONDOM_F');
            $table->tinyInteger('TCU_IMPLANT');
            $table->tinyInteger('TCU_PILLS_COC');
            $table->tinyInteger('TCU_IUDPP');

            // TEMP fields
            $table->tinyInteger('TEMP_FS');
            $table->tinyInteger('TEMP_MS');
            $table->tinyInteger('TEMP_PILLS');
            $table->tinyInteger('TEMP_IUD');
            $table->tinyInteger('TEMP_DMPA');
            $table->tinyInteger('TEMP_NFPCM');
            $table->tinyInteger('TEMP_NFPBBT');
            $table->tinyInteger('TEMP_NFPLAM');
            $table->tinyInteger('TEMP_NFPSDM');
            $table->tinyInteger('TEMP_NFPSTM');
            $table->tinyInteger('TEMP_CONDOM');
            $table->tinyInteger('TEMP_CONDOM_F');
            $table->tinyInteger('TEMP_IMPLANT');
            $table->tinyInteger('TEMP_PILLS_COC');
            $table->tinyInteger('TEMP_IUDPP');
            
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
