<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTimeStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_status', function (Blueprint $table) {
            $table->id();
            $table->string('sengketa_tanah_id',10)->nullable();
            $table->string('time_verifikasi',50)->nullable();
            $table->string('time_diproses',50)->nullable();
            $table->string('time_selesai',50)->nullable();
            $table->string('user_id',30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_status');
    }
}
