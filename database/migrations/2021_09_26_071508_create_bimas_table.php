<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimas', function (Blueprint $table) {
            $table->id();
            $table->string('bima_acquisition_date');
            $table->string('bima_acquisition_name');
            $table->string('bima_property_amount');
            $table->string('bima_reason_price');
            $table->string('bima_source_money');
            $table->string('bima_acquisition_address');
            $table->string('bima_comments');
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
        Schema::dropIfExists('bimas');
    }
}
