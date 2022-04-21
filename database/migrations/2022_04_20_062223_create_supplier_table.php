<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('kode',225);
            $table->string('nama',225);
            $table->string('alamat',225);
            $table->string('npwp',225);
            $table->string('telepon',225);
            $table->string('email',225);
            $table->string('hp',225);
            $table->string('no_rek',225);
            $table->string('nama_rek',225);
            $table->string('nama_bank',225);
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
        Schema::dropIfExists('supplier');
    }
}
