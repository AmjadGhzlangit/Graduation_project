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
        Schema::create('electoral_managment', function (Blueprint $table) {
            $table->id();
            $table->date('candidacy_start_date');
            $table->date('candidacy_end_date');
            $table->date('electoral_start_date');
            $table->date('electoral_end_date');
            $table->unsignedBigInteger('can_id');
          //  $table->foreign('can_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electoral_managment');
    }
};
