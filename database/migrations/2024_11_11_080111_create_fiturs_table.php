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
        Schema::create('fiturs', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('logo');
            $table->string('logoA')->nullable(); 
            $table->string('logoB')->nullable(); 
            $table->string('logoC')->nullable(); 
            
            $table->string('judul');
            $table->string('judulA');
            $table->string('judulB');
            $table->string('judulC');


            $table->string('deskripsi');
            $table->string('deskripsiA');
            $table->string('deskripsiB');
            $table->string('deskripsiC');

            $table->string('link');
            $table->string('linkA');
            $table->string('linkB');
            $table->string('linkC');


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
        Schema::dropIfExists('fiturs');
    }
};
