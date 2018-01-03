<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaranpers', function (Blueprint $table) {
            $table->increments('kdbayar');
            $table->unsignedInteger('kdpers');
            $table->date('tanggalbayar');
            $table->integer('jumlahbayar');
            $table->string('tipe',20)->nullable();
            $table->integer('lama');
            $table->date('aktifawal');
            $table->date('aktifakhir');
            $table->string('buktibayar',200);
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
        Schema::dropIfExists('pembayaranpers');
    }
}
