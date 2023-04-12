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
        Schema::create('voting_processes', function (Blueprint $table) {
            $table->id('vote_id');
            $table->foreignId('voter_id');
          //  $table->foreignId('voter_id')->constrained('voters');
            $table->unsignedBigInteger('candidate_id');
          //  $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting_processes');
    }
};
