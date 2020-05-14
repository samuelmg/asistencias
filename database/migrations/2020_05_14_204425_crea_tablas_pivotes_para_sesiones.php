<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaTablasPivotesParaSesiones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_persona', function (Blueprint $table) {
            $table->foreignId('persona_id');
            $table->foreignId('evento_id');

            $table->foreign('persona_id')
                ->references('id')->on('personas')
                ->onDelete('cascade');

            $table->foreign('evento_id')
                ->references('id')->on('eventos')
                ->onDelete('cascade');
        });

        Schema::create('persona_sesion', function (Blueprint $table) {
            $table->foreignId('persona_id');
            $table->foreignId('sesion_id');
            $table->dateTime('checkin');
            $table->dateTime('checkout')->nullable()->default(null);

            $table->foreign('persona_id')
                ->references('id')->on('personas')
                ->onDelete('cascade');

            $table->foreign('sesion_id')
                ->references('id')->on('sesiones')
                ->onDelete('cascade');
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
    }
}
