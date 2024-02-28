<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kursses', function (Blueprint $table) {
            $table->id();
            $table->string('nosaukums');
            $table->text('Paskaidrojušais_teksts');
            $table->string('Banera_adrese');
            $table->integer('Cilvēku_skaits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursses');
    }
};
