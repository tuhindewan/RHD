<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('land_acquisition_date');
            $table->string('land_acquisition_name');
            $table->string('land_property_amount');
            $table->string('land_reason_price');
            $table->string('land_source_money');
            $table->string('land_acquisition_address');
            $table->string('land_comments');
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
        Schema::dropIfExists('lands');
    }
}
