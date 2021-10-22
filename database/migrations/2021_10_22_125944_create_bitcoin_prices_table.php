<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitcoinPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitcoin_prices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('currency');
            $table->decimal('price', 20, 2);
            $table->decimal('market_cap', 20, 2);
            $table->decimal('total_volume', 20, 2);
            $table->decimal('high_24h', 20, 2);
            $table->decimal('low_24h', 20, 2);
            $table->decimal('price_change_percentage_24h', 20, 1);
            $table->decimal('price_change_percentage_7d', 20, 1);
            $table->decimal('price_change_percentage_14d', 20, 1);
            $table->decimal('price_change_percentage_30d', 20, 1);
            $table->decimal('price_change_percentage_60d', 20, 1);
            $table->decimal('price_change_percentage_200d', 20, 1);
            $table->decimal('price_change_percentage_1y', 20, 1);
            $table->decimal('market_cap_change_percentage_24h', 20, 1);
            $table->timestamp('last_upd_from_api')->nullable();
            $table->uuid('extraction_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitcoin_prices');
    }
}
