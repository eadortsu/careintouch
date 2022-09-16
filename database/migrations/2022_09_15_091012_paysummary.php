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
        Schema::create('paysummary', function (Blueprint $table) {
        $table->id();
        $table->date('date');
        $table->foreignID('user_id')->references('id')->on('users')->constrained()->onDelete('cascade')->onUpdate('cascade');
        //$table->integer('employee_id')->unsigned()->index();
        //$table->foreign('employee_id')->constrained();
        $table->unsignedBigInteger('employee_id_unique')->references('id')->on('add_employees')->onDelete('cascade')->onUpdate('cascade');
        $table->string('rate')->nullable();
        $table-> decimal('numberofvisits')->nullable();
        $table-> decimal('numberofmiles')->nullable();
        $table->string('status');
        $table->string('typeofemployment');
        $table->string('invoicenumber');
        $table-> decimal('totalrate')->nullable();
        $table-> string('comments')->nullable();
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
