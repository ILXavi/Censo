<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('domicilios', function (Blueprint $table) {
            $table->foreign('cp')->references('cp')->on('codigos');
        });

        Schema::table('personas', function (Blueprint $table) {
            $table->foreignId('domicilio_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('domicilios', function (Blueprint $table) {
            $table->dropForeign('domilicios_codigos_foreign');
        });
    }
}
