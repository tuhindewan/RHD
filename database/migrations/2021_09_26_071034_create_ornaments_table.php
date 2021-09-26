<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrnamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ornaments', function (Blueprint $table) {
            $table->id();
            $table->string('ornament_acquisition_date');
            $table->string('ornament_acquisition_name');
            $table->string('ornament_property_amount');
            $table->string('ornament_reason_price');
            $table->string('ornament_source_money');
            $table->string('ornament_acquisition_address');
            $table->string('ornament_comments');
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
        Schema::dropIfExists('ornaments');
    }
}
