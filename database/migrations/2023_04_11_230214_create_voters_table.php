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
        Schema::create('voters', function (Blueprint $table) {
            $table->bigIncrements('voter_id');
            $table->unsignedBigInteger('nation_Id_number');
          //  $table->foreign('nation_Id_number')->references('nation-id-number')->on('ID');
            $table->string('front_img');
            $table->string('back_img');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone-number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voters');
    }
};
