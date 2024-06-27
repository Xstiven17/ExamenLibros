<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ejemplars', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('localizacion');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ejemplars');
    }
};
