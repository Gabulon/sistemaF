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
            $table->string('nombre',30);
            $table->string('descripcion',100);
            $table->integer('categoria');
            $table->integer('sucursal');
            $table->integer('precio');
            $table->date('fecha_compra');
            $table->integer('estado')->default('0');;
            $table->string('comentarios')->default('');;
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
