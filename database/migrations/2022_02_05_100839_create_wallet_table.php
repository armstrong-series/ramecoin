<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet', function (Blueprint $table) {
            $table->id();
            $table->increments('id');
            $table->integer('user_id');
            $table->string('amount')->nullable();
            $table->string('file')->nullable();
            $table->enum('payment', ["btc", "eth", "usdt"]);
            $table->enum('status', ["success", "pending", "failed"]);
            $table->enum('type', ["credit", "debit"]);
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
        Schema::dropIfExists('wallet');
    }
}
