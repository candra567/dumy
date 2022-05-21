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
        Schema::create('table_menu', function (Blueprint $table) {
            $table->id('id_menu');
            $table->foreignId('idCategory')->references('id_category')->on('table_category');
            $table->string('name',150);
            $table->text('description');
            $table->decimal('price');
            $table->integer('ratingCount');
            $table->integer('ratingSum');
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
        Schema::dropIfExists('table_menu');
    }
};
