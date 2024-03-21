<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('publication');
            $table->date('date');
            $table->boolean('visibility');
            $table->unsignedBigInteger('language_id')->default(1);
            $table->unsignedBigInteger('framework_id');
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('user_id'); // Definir la columna user_id
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('vote_range')->nullable();
            $table->timestamps(); // Definir timestamps solo una vez
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
