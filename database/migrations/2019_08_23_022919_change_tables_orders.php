<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTablesOrders extends Migration
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
            $table->string('ordername', 20);
            $table->string('kai', 30);
            $table->integer('tiketsum', 30)->nullable(false)->change();
            $table->integer('tiketadl', 30)->nullable(false)->change();
            $table->integer('tiketcld', 30)->nullable(false)->change();
            $table->string('address', 40);
            $table->string('name', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*public function down()
    {
        Schema::drop('orders');
    }*/
}
