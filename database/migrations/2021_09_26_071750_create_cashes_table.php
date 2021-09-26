<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashes', function (Blueprint $table) {
            $table->id();
            $table->string('cash_acquisition_date');
            $table->string('cash_acquisition_name');
            $table->string('cash_property_amount');
            $table->string('cash_reason_price');
            $table->string('cash_source_money');
            $table->string('cash_acquisition_address');
            $table->string('cash_comments');
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
        Schema::dropIfExists('cashes');
    }
}
