<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presenter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('asal_instansi')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->text('nama_anggota')->nullable();
            $table->string('prodi', 100)->nullable();
            $table->string('alamat')->nullable();
            $table->string('judul_makalah')->nullable();
            $table->string('jenis_peserta')->nullable();
            $table->text('abstract');
            $table->string('keyword')->nullable();
            $table->string('makalah');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
