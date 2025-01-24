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
        Schema::create('previsions', function (Blueprint $table) {
            $table->id();
            $table->string('fichier'); // Le nom du fichier
            $table->longText('observations'); // Observations
            $table->unsignedBigInteger('user_id'); // ID de l'utilisateur
            $table->timestamps();

            // Clé étrangère qui fait référence à la table users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('previsions');
    }
};