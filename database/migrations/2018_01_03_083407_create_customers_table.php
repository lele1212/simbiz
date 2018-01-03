<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedInteger('kdpers');
            $table->string('kdcust',20);
            $table->string('nama',100);
            $table->string('alamat',200)->nullable();
            $table->string('telp',15);
            $table->integer('jthtempo');
            $table->unsignedInteger('kdlevel');
            $table->timestamps();
            $table->primary(['kdpers', 'kdcust']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
