<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id_cust');
            $table->string('nama_cust');
            $table->unsignedBigInteger('durian_cust');
            $table->integer('pesanan_cust');
            $table->timestamps();
            $table->foreign('durian_cust')
                ->references('id_durian')
                ->on('durians');
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
};
