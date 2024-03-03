<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalMeetingBid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalmeeting', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_meeting',['offline','online']);
            $table->integer('sengketa_id');
            $table->integer('users_id');
            $table->longText('location');
            $table->text('deskripsi');
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
        Schema::dropIfExists('jadwal_meeting');
    }
}
