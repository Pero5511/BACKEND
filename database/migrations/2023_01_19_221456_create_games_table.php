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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId(column:'organiser')->constrained(table:'users');
            $table->string('prize');
            $table->string('prize_value');
            $table->dateTime('finishes_at');
            $table->foreignId(column:'winner')->constrained(table:'users')->nullable();
            $table->string('tokens');
            $table->foreignId(column:'type')->constrained(table:'types');
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
        Schema::dropIfExists('games');
    }
};
