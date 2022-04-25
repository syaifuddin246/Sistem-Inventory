<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po', function (Blueprint $table) {
            $table->id();
            $table->string('no_po',225);
            $table->date('tglorder');
            $table->date('tglkirim');
            $table->string('kode_supplier',225);
            $table->string('nama_supplier',225);
            $table->string('nama_barang',225);
            $table->string('status',225);
            $table->date('tglbayar');
            $table->string('jml',225);
            $table->string('harga',225);
            $table->string('subtotal',225);
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
        Schema::dropIfExists('po');
    }
}
