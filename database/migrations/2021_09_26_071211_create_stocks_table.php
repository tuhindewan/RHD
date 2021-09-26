<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('stock_acquisition_date');
            $table->string('stock_acquisition_name');
            $table->string('stock_property_amount');
            $table->string('stock_reason_price');
            $table->string('stock_source_money');
            $table->string('stock_acquisition_address');
            $table->string('stock_comments');
            $table->string('property_type');
            $table->foreignId('user_id')->constrained()
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
