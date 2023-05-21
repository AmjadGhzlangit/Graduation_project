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
            $table->foreignId('candidacy_application_id')->constrained();
            $table->string('font_img');
            $table->string('back_img');
            $table->string('registerWork_img');
            $table->string('familyDocument_img');
            $table->string('residenceDocument_img');
            $table->string('education_img');
            $table->string('convicationDocument_img');
            $table->string('medicalExamination_img');
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
