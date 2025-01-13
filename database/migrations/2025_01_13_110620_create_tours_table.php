<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('duration'); // Durasi dalam hari
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade'); // Relasi ke Destinations
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
