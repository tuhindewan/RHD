<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('displayName');
            $table->string('officeName');
            $table->bigInteger('personalID');
            $table->bigInteger('officeID');
            $table->string('designation');
            $table->string('firstNameBN');
            $table->string('lastNameBn');
            $table->string('empID');
            $table->string('joining_date')->nullable();
            $table->string('current_workplace')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
