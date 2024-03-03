<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidSengketaTable extends Migration
{
    /**
     * Run the migrsations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_sengketa', function (Blueprint $table) {
            $table->id();
            $table->integer('sengketa_id');
            $table->integer('sponsor_id');
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
        Schema::dropIfExists('bid_sengketa');
    }
}
