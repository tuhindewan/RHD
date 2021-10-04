<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatementDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statement_details', function (Blueprint $table) {
            $table->id();
            $table->string('acquisition_date');
            $table->string('acquisition_name')->nullable();
            $table->string('property_amount');
            $table->string('reason_price');
            $table->string('source_money');
            $table->string('acquisition_address');
            $table->string('comments')->nullable();
            $table->foreignId('statement_id')
                    ->constrained('statements')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('statement_details');
    }
}
