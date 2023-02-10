<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendances', static function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->unsigned()->default(0);
            $table->integer('user_id')->unsigned();
            $table->boolean('state')->default(0);
            $table->time('attendance_time')->default(date("H:i:s"));;
            $table->date('attendance_date')->default(date("Y-m-d"));;
            $table->boolean('status')->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('type')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
           });
        Schema::dropIfExists('attendances');
    }
};
