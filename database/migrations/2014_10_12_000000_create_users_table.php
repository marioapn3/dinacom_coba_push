<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
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
            $table->string('phone_lead');
            $table->string('student_card')->nullable(); // kartu pelajar
            $table->string('level_category');
            $table->string('name_school')->nullable(); // is institution 
            $table->string('name_team')->nullable();
            $table->string('tutor')->nullable(); // is guru pembimbing
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status_contest')->default('pending');  // pending = masa upload project , penyisihan = jika lolos babak penyisihan , semifinal, final
            $table->boolean('isAdmin')->default(0);
            $table->rememberToken();
            $table->softDeletes();
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
}
