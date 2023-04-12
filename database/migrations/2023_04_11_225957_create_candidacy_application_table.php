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
        Schema::create('candidacy_application', function (Blueprint $table) {
            $table->id('cndApp-id');
            $table->string('email');
            $table->string('password');
            $table->string('phoneNumber');
            $table->string('education');
            $table->string('category');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidacy_application');
    }
};
