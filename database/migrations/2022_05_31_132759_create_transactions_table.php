<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id_transaction');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_package')->unsigned();
            $table->foreign('id_package')->references('id_package')->on('packages')->onDelete('cascade')->onUpdate('cascade');
            $table->string('phone_number', 13);
            $table->string('payment_method', 8)->default('Midtrans');
            $table->integer('payment_total');
            $table->string('payment_status', 8)->default('Pending');
            $table->string('payment_url')->nullable();
            $table->text('project_desc')->nullable();
            $table->date('deadline')->nullable();
            $table->string('working_status', 20)->default('Off Working');
            $table->string('persentase', 5)->default('0%');
            $table->text('process_desc')->nullable();
            $table->integer('token_review')->default(1);
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
        Schema::dropIfExists('transactions');
    }
}
