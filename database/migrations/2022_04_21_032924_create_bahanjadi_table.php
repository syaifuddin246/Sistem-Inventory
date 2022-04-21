<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanjadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahanjadi', function (Blueprint $table) {
            $table->id();
            $table->string('kodemasuk',225);
            $table->string('kodekeluar',225)->nullable();
            $table->date('tglmasuk');
            $table->date('tglkeluar')->nullable();
            $table->string('namabarang',225);
            $table->string('namabarangkeluar',225)->nullable();
            $table->string('modelbarang',225);
            $table->string('modelbarangkeluar',225)->nullable();
            $table->bigInteger('jmlmasuk');
            $table->bigInteger('jmlkeluar')->nullable();
            $table->bigInteger('jmltotal')->nullable();
            $table->bigInteger('hargabarang');
            $table->bigInteger('hargabarangkeluar');
            $table->bigInteger('subtotal');
            $table->bigInteger('subtotalkeluar');
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
        Schema::dropIfExists('bahanjadi');
    }
}
