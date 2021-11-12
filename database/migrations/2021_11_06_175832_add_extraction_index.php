<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtractionIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('extractions', function (Blueprint $table) {
            $table->index('extraction_id', 'ext_extraction_id_index');
        });

        Schema::table('bitcoin_prices', function (Blueprint $table) {
            $table->index('extraction_id', 'bpr_extraction_id_index');
        });

        Schema::table('sentiments', function (Blueprint $table) {
            $table->index('extraction_id', 'sen_extraction_id_index');
        });

        Schema::table('fees', function (Blueprint $table) {
            $table->index('extraction_id', 'fee_extraction_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('extractions', function (Blueprint $table) {
            $table->dropIndex('ext_extraction_id_index');
        });

        Schema::table('bitcoin_prices', function (Blueprint $table) {
            $table->dropIndex('bpr_extraction_id_index');
        });

        Schema::table('sentiments', function (Blueprint $table) {
            $table->dropIndex('sen_extraction_id_index');
        });

        Schema::table('fees', function (Blueprint $table) {
            $table->dropIndex('fee_extraction_id_index');
        });
    }
}
