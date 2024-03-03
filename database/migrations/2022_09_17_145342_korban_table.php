<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KorbanTable extends Migration
{
    /**
     * Run the migrations.s
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korban_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('objek_sengketa');
            $table->string('luas');
            $table->string('lokasi');
            $table->longText('kronologi')->nullable();
            $table->string('file_kronologi')->nullable();
            $table->string('status_pelapor');
            $table->string('jenis_pertolongan');
            $table->string('foto_ktp')->nullable();
            $table->string('foto_lokasi')->nullable();
            $table->string('foto_dokumen_hak_tanah')->nullable();
            $table->string('status_sengketa');
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
        Schema::dropIfExists('korban_user');
    }
}
