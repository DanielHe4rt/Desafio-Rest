<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Marmitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Marmitas', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome');
            $table->longText('descricao');
            $table->float('preco', 8,2);
            $table->integer('estoque');
            $table->string('image');
            $table->integer('desconto')->nullable();
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
        Schema::dropIfExists('Marmitas', function(Blueprint $table){
            $table->drop();
        });
    }
}
