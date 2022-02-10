<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateForWallet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wallet', function (Blueprint $table) {
            $table->dateTime('txn_date')->nullable();
            $table->string('increment')->nullable();;
            $table->string('txn_id')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wallet', function (Blueprint $table) {
            $table->dropColumn(['txn_date']);
            $table->dropColumn(['txn_id']);
            $table->dropColumn(['increment']);
            $table->dropColumn(['email']);
        });
        
    }
}
