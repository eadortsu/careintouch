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
        Schema::create('paysummaries', function (Blueprint $table) {
        $table->pid();
        $table->date('date');
        $table->foreignID('user_id')->constrained()->unsigned()->references('id')->on('users')->constrained()->onDelete('cascade')->onUpdate('cascade');
        $table->string('patient_name');
        //$table->foreign('employee_id')->constrained();
        $table->foreignID('employee_id_unique')->references('id')->on('add_employees')->nullable();
        $table->string('rate')->nullable();
        $table->string('ratetype')->nullable();
        $table-> decimal('numberofvisits')->nullable();
        $table-> decimal('numberofmiles')->nullable();
        $table->string('milesusd')->nullable();
        $table->string('invoicenumber')->nullable();
        $table-> decimal('totalrate')->nullable();
        $table-> string('comments')->nullable();
        $table-> string('status');
        $table-> string('typeofvisit')->nullable();
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
