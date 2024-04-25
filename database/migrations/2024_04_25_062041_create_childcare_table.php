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
        Schema::create('childcare', function (Blueprint $table) {
            $table->id();
            $table->string('REG_CODE')->nullable();
            $table->string('PROV_CODE')->nullable();
            $table->string('MUN_CODE')->nullable();
            $table->string('BGY_CODE')->nullable();
            $table->date('DATE');

            $table->tinyInteger('IMM_BCG_M');
            $table->tinyInteger('IMM_BCG_F');
            $table->tinyInteger('IMM_DPT1_M');
            $table->tinyInteger('IMM_DPT1_F');
            $table->tinyInteger('IMM_DPT2_M');
            $table->tinyInteger('IMM_DPT2_F');
            $table->tinyInteger('IMM_DPT3_M');
            $table->tinyInteger('IMM_DPT3_F');
            $table->tinyInteger('IMM_OPV1_M');
            $table->tinyInteger('IMM_OPV1_F');
            $table->tinyInteger('IMM_OPV2_M');
            $table->tinyInteger('IMM_OPV2_F');
            $table->tinyInteger('IMM_OPV3_M');
            $table->tinyInteger('IMM_OPV3_F');
            $table->tinyInteger('IMM_HEPAB1WIN24_M');
            $table->tinyInteger('IMM_HEPAB1WIN24_F');
            $table->tinyInteger('IMM_HEPAB124_M');
            $table->tinyInteger('IMM_HEPAB124_F');
            $table->tinyInteger('IMM_HEPAB2_M');
            $table->tinyInteger('IMM_HEPAB2_F');
            $table->tinyInteger('IMM_HEPAB3_M');
            $table->tinyInteger('IMM_HEPAB3_F');
            $table->tinyInteger('IMM_MEAS_M');
            $table->tinyInteger('IMM_MEAS_F');
            $table->tinyInteger('FIC_M');
            $table->tinyInteger('FIC_F');
            $table->tinyInteger('CIC_M');
            $table->tinyInteger('CIC_F');
            $table->tinyInteger('CPB_M');
            $table->tinyInteger('CPB_F');
            $table->tinyInteger('INF_AGE_M');
            $table->tinyInteger('INF_AGE_F');
            $table->tinyInteger('INF_BREAST_M');
            $table->tinyInteger('INF_BREAST_F');
            $table->tinyInteger('INF_NEWBS_M');
            $table->tinyInteger('INF_NEWBS_F');
            $table->tinyInteger('INF_VITA611_M');
            $table->tinyInteger('INF_VITA611_F');
            $table->tinyInteger('INF_VITA1259_M');
            $table->tinyInteger('INF_VITA1259_F');
            $table->tinyInteger('INF_VITA6071_M');
            $table->tinyInteger('INF_VITA6071_F');
            $table->tinyInteger('SICK_611_M');
            $table->tinyInteger('SICK_611_F');
            $table->tinyInteger('SICK_1259_M');
            $table->tinyInteger('SICK_1259_F');
            $table->tinyInteger('SICK_6071_M');
            $table->tinyInteger('SICK_6071_F');
            $table->tinyInteger('SICKVITA_611_M');
            $table->tinyInteger('SICKVITA_611_F');
            $table->tinyInteger('SICKVITA_1259_M');
            $table->tinyInteger('SICKVITA_1259_F');
            $table->tinyInteger('SICKVITA_6071_M');
            $table->tinyInteger('SICKVITA_6071_F');
            $table->tinyInteger('INF26LBWNS_M');
            $table->tinyInteger('INF26LBWNS_F');
            $table->tinyInteger('INF26FE_M');
            $table->tinyInteger('INF26FE_F');
            $table->tinyInteger('ANECHILDNS_M');
            $table->tinyInteger('ANECHILDNS_F');
            $table->tinyInteger('ANECHILDFE_M');
            $table->tinyInteger('ANECHILDFE_F');
            $table->tinyInteger('DIARRNC_M');
            $table->tinyInteger('DIARRNC_F');
            $table->tinyInteger('DIARRORT_M');
            $table->tinyInteger('DIARRORT_F');
            $table->tinyInteger('DIARRORS_M');
            $table->tinyInteger('DIARRORS_F');
            $table->tinyInteger('DIARRORSZ_M');
            $table->tinyInteger('DIARRORSZ_F');
            $table->tinyInteger('PNEUNC_M');
            $table->tinyInteger('PNEUNC_F');
            $table->tinyInteger('PNEUGT_M');
            $table->tinyInteger('PNEUGT_F');
            $table->tinyInteger('IMM_PENTA1_M');
            $table->tinyInteger('IMM_PENTA1_F');
            $table->tinyInteger('IMM_PENTA2_M');
            $table->tinyInteger('IMM_PENTA2_F');
            $table->tinyInteger('IMM_PENTA3_M');
            $table->tinyInteger('IMM_PENTA3_F');
            $table->tinyInteger('IMM_MCV1_M');
            $table->tinyInteger('IMM_MCV1_F');
            $table->tinyInteger('IMM_MCV2_M');
            $table->tinyInteger('IMM_MCV2_F');
            $table->tinyInteger('IMM_ROTA1_M');
            $table->tinyInteger('IMM_ROTA1_F');
            $table->tinyInteger('IMM_ROTA2_M');
            $table->tinyInteger('IMM_ROTA2_F');
            $table->tinyInteger('IMM_ROTA3_M');
            $table->tinyInteger('IMM_ROTA3_F');
            $table->tinyInteger('IMM_PCV1_M');
            $table->tinyInteger('IMM_PCV1_F');
            $table->tinyInteger('IMM_PCV2_M');
            $table->tinyInteger('IMM_PCV2_F');
            $table->tinyInteger('IMM_PCV3_M');
            $table->tinyInteger('IMM_PCV3_F');
            $table->tinyInteger('INF_FOOD_M');
            $table->tinyInteger('INF_FOOD_F');
            $table->tinyInteger('INF611FE_M');
            $table->tinyInteger('INF611FE_F');
            $table->tinyInteger('INF1259FE_M');
            $table->tinyInteger('INF1259FE_F');
            $table->tinyInteger('INF611MNP_M');
            $table->tinyInteger('INF611MNP_F');
            $table->tinyInteger('INF1223MNP_M');
            $table->tinyInteger('INF1223MNP_F');
            $table->tinyInteger('CHILD_1259DW_M');
            $table->tinyInteger('CHILD_1259DW_F');
            $table->tinyInteger('INF25LBWFE_M');
            $table->tinyInteger('INF25LBWFE_F');
            $table->tinyInteger('INF25LBWNS_M');
            $table->tinyInteger('INF25LBWNS_F');
            $table->tinyInteger('ANECHILD611_M');
            $table->tinyInteger('ANECHILD611_F');
            $table->tinyInteger('ANECHILD611FE_M');
            $table->tinyInteger('ANECHILD611FE_F');
            $table->tinyInteger('ANECHILD1259_M');
            $table->tinyInteger('ANECHILD1259_F');
            $table->tinyInteger('ANECHILD1259FE_M');
            $table->tinyInteger('ANECHILD1259FE_F');
            $table->tinyInteger('TD1_M');
            $table->tinyInteger('TD1_F');
            $table->tinyInteger('MR1_M');
            $table->tinyInteger('MR1_F');
            $table->tinyInteger('TD7_M');
            $table->tinyInteger('TD7_F');
            $table->tinyInteger('MR7_M');
            $table->tinyInteger('MR7_F');
            $table->tinyInteger('INF_BREAST90_M');
            $table->tinyInteger('INF_BREAST90_F');
            $table->tinyInteger('INF_FOODONLY_M');
            $table->tinyInteger('INF_FOODONLY_F');
            $table->tinyInteger('DWPSAC_M');
            $table->tinyInteger('DWPSAC_F');
            $table->tinyInteger('DWSAC_M');
            $table->tinyInteger('DWSAC_F');
            $table->tinyInteger('DW1019_M');
            $table->tinyInteger('DW1019_F');
            $table->tinyInteger('IMM_IPV_M');
            $table->tinyInteger('IMM_IPV_F');
            $table->tinyInteger('STUNTED059_M');
            $table->tinyInteger('STUNTED059_F');
            $table->tinyInteger('WASTEDMAM059_M');
            $table->tinyInteger('WASTEDMAM059ID_M');
            $table->tinyInteger('WASTEDMAM059CURE_M');
            $table->tinyInteger('WASTEDMAM059DEF_M');
            $table->tinyInteger('WASTEDMAM059DIED_M');
            $table->tinyInteger('WASTEDMAM059DIS_M');
            $table->tinyInteger('WASTEDMAM059_F');
            $table->tinyInteger('WASTEDMAM059ID_F');
            $table->tinyInteger('WASTEDMAM059CURE_F');
            $table->tinyInteger('WASTEDMAM059DEF_F');
            $table->tinyInteger('WASTEDMAM059DIED_F');
            $table->tinyInteger('WASTEDMAM059DIS_F');
            $table->tinyInteger('WASTEDSAM059_M');
            $table->tinyInteger('WASTEDSAM059ID_M');
            $table->tinyInteger('WASTEDSAM059CURE_M');
            $table->tinyInteger('WASTEDSAM059DEF_M');
            $table->tinyInteger('WASTEDSAM059DIED_M');
            $table->tinyInteger('WASTEDSAM059DIS_M');
            $table->tinyInteger('WASTEDSAM059_F');
            $table->tinyInteger('WASTEDSAM059ID_F');
            $table->tinyInteger('WASTEDSAM059CURE_F');
            $table->tinyInteger('WASTEDSAM059DEF_F');
            $table->tinyInteger('WASTEDSAM059DIED_F');
            $table->tinyInteger('WASTEDSAM059DIS_F');
            $table->tinyInteger('OBESE059_M');
            $table->tinyInteger('OBESE059_F');
            $table->tinyInteger('NORMWT059_M');
            $table->tinyInteger('NORMWT059_F');
            $table->tinyInteger('GR1ENROLL_M');
            $table->tinyInteger('GR1ENROLL_F');
            $table->tinyInteger('GR7ENROLL_M');
            $table->tinyInteger('GR7ENROLL_F');
            $table->tinyInteger('DWPSACSB_M');
            $table->tinyInteger('DWPSACSB_F');
            $table->tinyInteger('DWSACSB_M');
            $table->tinyInteger('DWSACSB_F');
            $table->tinyInteger('DW1019SB_M');
            $table->tinyInteger('DW1019SB_F');
            $table->tinyInteger('INF_BREASTA_M');
            $table->tinyInteger('INF_BREASTA_F');
            $table->tinyInteger('INF_FOODA_M');
            $table->tinyInteger('INF_FOODA_F');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_care');
    }
};