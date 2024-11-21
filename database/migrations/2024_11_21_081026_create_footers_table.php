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
        Schema::create('footers', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('iconA');
            $table->string('textA');
            $table->string('linkA');

            $table->string('iconB');
            $table->string('textB');
            $table->string('linkB');

            $table->string('iconC');
            $table->string('textC');
            $table->string('linkC');

            $table->string('iconD');
            $table->string('textD');
            $table->string('linkD');

            $table->enum('is_active', [ 'active', 'not_active'])->default('not_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
