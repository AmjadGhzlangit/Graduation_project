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
        Schema::create('voting_candidates', function (Blueprint $table) {
            $table->id('process-id');
          //  $table->unsignedBigInteger('process-id');
           // $table->foreign('process-id')->references('id')->on('voting-process');
            $table->unsignedBigInteger('vote-id');
           // $table->foreign('vote-id')->references('voter-id')->on('voting-process');
            $table->unsignedBigInteger('candidate-id');
          //  $table->foreign('candidate-id')->references('can-id')->on('candidacy-application');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting_candidates');
    }
};
