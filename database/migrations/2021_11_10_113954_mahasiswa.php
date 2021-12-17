<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
        $table->id();
        $table->integer('nim');
        $table->string('nama');
        $table->string('semester');
        $table->enum('jk', ['Laki-laki', 'Perempuan']);
        $table->string('tempat_lahir');
        $table->date('tgl_lahir');
        $table->string('agama');
        $table->string('prodi');
        $table->string('jurusan');
        $table->bigInteger('hp');
        $table->string('email');
        $table->string('alamat');
        $table->string('keterangan');
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
        Schema::dropIfExists('mahasiswa');
    }
}
