<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration {
    public function up() {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('descricao');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('categorias');
    }
}