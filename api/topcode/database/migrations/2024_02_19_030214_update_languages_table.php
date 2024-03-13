<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('languages', function (Blueprint $table) {
            // Agregar la columna 'language_id' después del campo 'type'
            $table->integer('language_id')->nullable()->after('type');
            // Opcionalmente puedes usar nullable() si deseas permitir valores nulos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('languages', function (Blueprint $table) {
            // Revertir la migración eliminando la columna 'language_id'
            $table->dropColumn('language_id');
        });
    }
}