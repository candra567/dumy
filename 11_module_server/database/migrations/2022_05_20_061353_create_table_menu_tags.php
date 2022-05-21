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
        Schema::create('table_menu_tags', function (Blueprint $table) {
            $table->id('id_menu_tags');
            $table->foreignId('id_tags_menu')->references('id_tags')->on('table_tags');
            $table->foreignId('idmenu_tags')->references('id_menu')->on('table_menu');
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
        Schema::dropIfExists('table_menu_tags');
    }
};
