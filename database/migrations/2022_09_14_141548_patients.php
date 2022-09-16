<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table-> foreignID('employee_id')->references('id')->on('add_employees')->onDelete('cascade')->onUpdate('cascade');
            //$table-> unsignedBigInteger('employee_id')->references('id')->on('add_employees')->onDelete('cascade')->onUpdate('cascade');
            $table-> foreignID('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table-> string('patient_name');
            $table-> decimal('numberofvisits')->nullable();
            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
