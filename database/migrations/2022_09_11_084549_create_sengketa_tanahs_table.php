<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSengketaTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sengketa_tanah', function (Blueprint $table) {
            $table->id();
            $table->string('nama',200);
            $table->text('alamat',200);
            $table->string('no_hp',200);
            $table->string('objek_sengketa',50);
                $table->string('luas',150);
            $table->text('lokasi');
            $table->text('kronologi');
            $table->string('status_pelapor',50);
            $table->string('foto_ktp',255);
            $table->string('dokumen_tanah',255);
            $table->string('status_laporan',10);
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
        Schema::dropIfExists('sengketa_tanah');
    }
}
