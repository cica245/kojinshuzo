<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('science_data', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('bunruigun');
                $table->string('wamei')->nullable();
                $table->string('gakumei');
                $table->string('sex')->nullable();
                $table->string('saishuchi')->nullable();
                $table->string('lat')->nullable();
                $table->string('lng')->nullable();
                $table->integer('saishunen')->nullable();
                $table->integer('saishutsuki')->nullable();
                $table->integer('saishubi')->nullable();
                $table->string('saishusha')->nullable();
                $table->string('douteisha')->nullable();
                $table->string('shozousha');
                $table->string('type')->nullable();
                $table->string('gazou')->nullable();
                $table->string('gazou2')->nullable();
                $table->string('gazou3')->nullable();
                $table->string('save')->nullable();
                $table->integer('license');
                $table->string('comment')->nullable();
                $table->string('twitterID')->nullable();
                $table->string('shuzokikan')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('science_data');
    }
};
