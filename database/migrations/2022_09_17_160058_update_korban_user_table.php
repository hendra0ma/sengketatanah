<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateKorbanUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('korban_user', function (Blueprint $table) {
            $table->string('jumlah_dana')->nullable();
            $table->string('pengembalian_dana')->nullable();
            $table->string('jaminan_dana')->nullable();
            $table->string('file_jaminan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('korban_user', function (Blueprint $table) {
            //
        });
    }
}
