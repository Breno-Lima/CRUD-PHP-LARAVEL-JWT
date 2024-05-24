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
        
Schema::create('employees', function (Blueprint $table) {
    $table->id();
    $table->string('nome', 128);
    $table->string('nome_social', 128);
    $table->date('data_nascimento')->nullable();
    $table->string('cpf', 11);
    $table->timestamps();
    $table->string('imagem', 2048)->nullable();
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
