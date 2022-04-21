<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanbakuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahanbaku', function (Blueprint $table) {
            $table->id();
            $table->string('kodemasuk',225);
            $table->string('kodekeluar',225)->nullable();
            $table->date('tglmasuk');
            $table->date('tglkeluar')->nullable();
            $table->string('namabarang',225);
            $table->string('namabarangkeluar',225)->nullable();
            $table->bigInteger('jmlmasuk');
            $table->bigInteger('jmlkeluar')->nullable();
            $table->bigInteger('jmltotal')->nullable();
            $table->bigInteger('hargabarang');
            $table->bigInteger('subtotal');
            $table->string('kodesupplier',225);
            $table->string('namasupplier',225);
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
        Schema::dropIfExists('bahanbaku');
    }
}
