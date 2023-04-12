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
        Schema::create('result_application', function (Blueprint $table) {
            $table->id('result-id');
            $table->unsignedBigInteger('can-id');
           // $table->foreign('can-id')->references('cndApp-id')->on('candidacy-application');
            $table->string('status');
            $table->string('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_application');
    }
};
