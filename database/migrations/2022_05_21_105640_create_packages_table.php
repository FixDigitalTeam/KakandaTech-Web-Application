<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id_package');
            $table->string('nama_package', 40);
            $table->string('slug');
            $table->integer('harga');
            $table->string('deskripsi', 150);
            $table->string('keuntungan_1', 80)->nullable();
            $table->string('keuntungan_2', 80)->nullable();
            $table->string('keuntungan_3', 80)->nullable();
            $table->string('keuntungan_4', 80)->nullable();
            $table->string('keuntungan_5', 80)->nullable();
            $table->string('keuntungan_6', 80)->nullable();
            $table->string('keuntungan_7', 80)->nullable();
            $table->string('keuntungan_8', 80)->nullable();
            $table->string('waktu_pengerjaan', 80)->nullable();
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('packages');
    }
}
