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
    public function up(): void
    {
        Schema::create('gatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('idade');
            $table->integer('cpf');
            $table->string('sexo');
            $table->string('altura');
            $table->text('peso');
            $table->string('foto')->nullable()->default('');

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
        Schema::dropIfExists('farmacias');
    }
};
