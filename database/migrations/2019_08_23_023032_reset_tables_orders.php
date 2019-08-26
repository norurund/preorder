<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResetTablesOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ordername');
            $table->integer('kai');
            $table->integer('tiketsum', 30)->nullable(false)->change();
            $table->integer('tiketadl', 30)->nullable(false)->change();
            $table->integer('tiketcld', 30)->nullable(false)->change();
            $table->string('name');
            $table->string('address');
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
        Schema::dropIfExists('orders');
    }
}
