<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('foto')->default('default.jpg');
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('no_hp_wali')->nullable();
            $table->string('email_wali')->nullable();
            $table->boolean('cek_akun_ortu')->default(false);
            $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profile_users');
    }
}
