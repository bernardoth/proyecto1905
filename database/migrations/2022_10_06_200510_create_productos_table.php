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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 20);
            $table->string('descripcion', 250);
            $table->decimal('precio', 10, 2);
            $table->integer('stock')->default(0);
            $table->decimal('precioventa',10,2);
            $table->integer('stockinicial');

            $table->enum('estado',['ACTIVO','INACTIVO'])->default('ACTIVO');
            $table->integer('entrada');
            $table->integer('salida');
            $table->integer('cant_min')->default(10);
            $table->foreignId('categoria_id')->constrained('categorias');
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
        Schema::dropIfExists('productos');
    }
};
