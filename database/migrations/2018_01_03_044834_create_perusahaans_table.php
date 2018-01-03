<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->increments('kdpers');
            $table->string('nama',200);
            $table->string('alamat',200);
            $table->string('telp',15);
            $table->string('kota',50);
            $table->string('email',200);
            $table->string('namapers',200)->nullable();
            $table->string('alamatper',200)->nullable();
            $table->string('telppers',15)->nullable();
            $table->string('kotapers',50)->nullable();
            $table->string('emailpers',200)->nullable();
            $table->string('logopers',200)->nullable();
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
        Schema::dropIfExists('perusahaans');
    }
}
