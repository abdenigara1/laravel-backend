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
        Schema::create('ecos', function (Blueprint $table) {
            $table->id();
            $table->string('achA');
            $table->string('achB');
            $table->string('achC');
            $table->string('header');
            $table->string('subHeader');
            $table->string('banner');
            $table->timestamps();
            $table->enum('is_active', [ 'active', 'not_active'])->default('not_active');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecos');
    }
};
