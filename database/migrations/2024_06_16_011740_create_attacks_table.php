<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('attacks', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('image');
        $table->integer('damage');
        $table->text('description');
        $table->string('type')->nullable();
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('attacks');
    }
};
