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
            $table->id();
            $table->string('submited_by')->nullable();
            $table->date('submited_date')->nullable();
            $table->string('code')->nullable();
            $table->string('activity')->nullable();
            $table->string('UOM')->nullable();
            $table->string('block')->nullable();
            $table->string('task')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('mesin_id')->nullable();
            $table->string('fuel')->nullable();
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
