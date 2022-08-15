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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('proyek')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('harga')->nullable();
            $table->string('photo')->nullable();
            $table->string('kamar_tidur')->nullable();
            $table->string('kamar_mandi')->nullable();
            $table->string('dapur')->nullable();
            $table->string('spesifikasi_bangunan')->nullable();
            $table->string('fasilitas_sarana')->nullable();
            $table->string('tipe_properti')->nullable();
            $table->string('luas_bangunan')->nullable();
            $table->string('luas_tanah')->nullable();
            $table->string('sertifikasi_unit')->nullable();
            $table->string('status_properti')->nullable();
            $table->string('dinding')->nullable();
            $table->string('plafond')->nullable();
            $table->string('pintu')->nullable();
            $table->string('jendela')->nullable();
            $table->string('lantai')->nullable();
            $table->string('keramik_wc')->nullable();
            $table->string('sanitair')->nullable();
            $table->string('listrik')->nullable();
            $table->string('air')->nullable();
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
        Schema::dropIfExists('units');
    }
};
