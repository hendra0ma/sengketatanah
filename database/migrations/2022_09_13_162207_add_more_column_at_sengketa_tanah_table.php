<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnAtSengketaTanahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sengketa_tanah', function (Blueprint $table) {
            $table->float('kebutuhan_dana_sponsor',200)->nullable();
            $table->string('pengembalian_dana_sponsor',200)->nullable();
            $table->string('jaminan',20)->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
