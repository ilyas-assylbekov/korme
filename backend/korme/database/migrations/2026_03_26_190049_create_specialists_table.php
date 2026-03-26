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
        Schema::create('specialists', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('specialty');
            $table->text('bio')->nullable();
            $table->string('phone')->nullable();    
            $table->timestamps();

            $table->index('specialty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialists');
    }
};
