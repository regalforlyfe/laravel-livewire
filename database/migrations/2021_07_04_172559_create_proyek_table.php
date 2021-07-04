<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_proyek');
            $table->text('deskripsi_proyek')->nullable();
            $table->string('jenis_proyek')->nullable();
            $table->string('tahun')->nullable();
            $table->string('image');
            $table->unsignedBigInteger('id_kategori')->nullable()->index('id_kategori');
            $table->string('link_proyek');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
