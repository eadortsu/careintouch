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
        Schema::create('registries', function (Blueprint $table) {
            $table->rid();
            $table-> foreignID('user_id')->constrained()->unsigned()->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table-> foreignID('employee_id')->references('id')->on('add_employees')->onDelete('cascade')->onUpdate('cascade');
            $table-> string('typeofemployment')->nullable();
            $table-> string('registrytype')->nullable();
            $table-> string('status')->nullable();
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

    }
};
