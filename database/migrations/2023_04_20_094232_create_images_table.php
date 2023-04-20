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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidacy_applications_id')->constrained();
            $table->string('font-img');
            $table->string('back-img');
            $table->string('registerWork-img');
            $table->string('familyDocument-img');
            $table->string('residenceDocument-img');
            $table->string('education-img');
            $table->string('convicationDocument-img');
            $table->string('medicalExamination-img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
