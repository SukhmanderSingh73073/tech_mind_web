<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('schedules', function ($table) {
            $table->id();
            $table->string('school_id');
            $table->string('slug');
            $table->time('time_in');
            $table->time('time_out');

            $table->timestamps();
        });
        Schema::table('schedule_users', function ($table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('schedule_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
       
        });
       
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   

        // Schema::table('schedule_users', function ($table) {
        //     $table->dropForeign(['schedule_id']);
        //     $table->dropForeign(['user_id']);
        // });
        // Schema::dropIfExists('schedule_users');
        // Schema::dropIfExists('schedules');
    }
} ;
