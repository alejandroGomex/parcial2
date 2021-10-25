<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 20)->nullable()->default('text');
            $table->string('user_name', 50)->nullable()->default('text');
            $table->string('user_last_name', 50)->nullable()->default('text');
            $table->string('user_email', 50)->nullable()->default('text');
            $table->string('direccion', 50)->nullable()->default('text');
            $table->enum('especialidad', ['cardiologo', 'neurologo','anestesiologo'])->nullable()->default('neurologo');
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
        Schema::dropIfExists('doctors');
    }
}
