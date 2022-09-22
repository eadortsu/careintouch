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
        Schema::create('add_employees', function (Blueprint $table) {
            $table->id();
            $table-> foreignID('user_id')->constrained()->onDelete('cascade');
            $table-> string('name');
            $table-> string('position')->nullable();
            $table-> date('date')->nullable();
            $table-> decimal('hourlyrate')->nullable();
            $table-> string('rate')->nullable();
            $table-> string('status')->nullable();
            $table-> string('email');
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
