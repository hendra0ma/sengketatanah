<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalMeetingUpdate extends Migration
{
    /**
     * Run the migrations.ss
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwalmeeting', function (Blueprint $table) {
            $table->string('date');
            $table->string('time');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwalmeeting', function (Blueprint $table) {
            //
        });
    }
}
