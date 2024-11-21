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
        Schema::create('showcases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('showA');
            $table->string('linkA');
            $table->string('showB');
            $table->string('linkB');
            $table->string('showC');
            $table->string('linkC');
            $table->string('showD');
            $table->string('linkD');
            $table->enum('is_active', [ 'active', 'not_active'])->default('not_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showcases');
    }
};
