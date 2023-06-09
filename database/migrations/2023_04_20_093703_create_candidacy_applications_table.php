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
        Schema::create('candidacy_applications', function (Blueprint $table) {
            $table->id();
            $table->string('phoneNumber')->nullable();
            $table->string('education')->nullable();
            $table->string('category')->nullable();
            $table->string('address')->nullable();
            $table->integer('votes')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidacy_applications');
    }
};
