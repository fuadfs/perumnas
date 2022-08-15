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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullabe();
            $table->string('lokasi')->nullabe();
            $table->string('alamat_kantor_pemasaran')->nullabe();
            $table->string('telepon')->nullabe();
            $table->string('email')->nullabe();
            $table->string('sarana_prasarana')->nullabe();
            $table->string('luas_lahan')->nullabe();
            $table->string('luas_potensi_kerja_sama')->nullabe();
            $table->string('eksposur_depan')->nullabe();
            $table->string('koordinat')->nullabe();
            $table->string('kontur_lahan')->nullabe();
            $table->string('penggunaan_lahan')->nullabe();
            $table->string('lingkungan')->nullabe();
            $table->string('alas_hak')->nullabe();
            $table->string('batas_lahan')->nullabe();
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
        Schema::dropIfExists('projects');
    }
};
