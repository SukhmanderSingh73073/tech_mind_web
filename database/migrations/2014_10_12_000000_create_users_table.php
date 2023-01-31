<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('aadhaar_number');
            $table->string('caste')->comment('GENERAL,OBC,SC/ST');
            $table->string('fname');
            $table->string('mname');
            $table->string('f_occupation')->comment("FARMER,BUISNESSMAN,GOVERNMENT SERVANT,LABOUR");
            $table->string('m_occupation')->comment("FARMER,BUISNESSMAN,GOVERNMENT SERVANT,LABOUR,HOUSE WOMAN");
            $table->string('previous_school');

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
        Schema::dropIfExists('users');
    }
};
