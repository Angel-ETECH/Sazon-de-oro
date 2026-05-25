<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->id();

            $table->string('nombre');

            $table->text('descripcion');

            $table->decimal('precio', 8, 2);

            $table->decimal('precio_anterior', 8, 2)->nullable();

            $table->integer('descuento')->nullable();

            $table->string('categoria');

            $table->string('imagen');

            $table->boolean('promocion')->default(false);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
