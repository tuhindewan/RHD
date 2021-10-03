<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statements', function (Blueprint $table) {
            $table->id();
            $table->string('acquisition_date');
            $table->string('acquisition_name')->nullable();
            $table->string('property_amount');
            $table->string('reason_price');
            $table->string('source_money');
            $table->string('acquisition_address');
            $table->string('comments')->nullable();
            $table->tinyInteger('final_submition')->default(0);
            $table->foreignId('type_id')
                    ->constrained('property_types')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('user_id')
                    ->constrained('users')
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
        Schema::dropIfExists('statements');
    }
}
