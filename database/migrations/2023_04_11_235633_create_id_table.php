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
        Schema::create('id', function (Blueprint $table) {
            $table->integer('nation_id_number')->primary();
            $table->string('gender', 10);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('father_name', 50);
            $table->string('mother_name', 50);
            $table->date('birthday');
            $table->string('place_birth', 50);
            $table->string('place_registration', 50);
            $table->integer('number_registration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id');
    }
};
