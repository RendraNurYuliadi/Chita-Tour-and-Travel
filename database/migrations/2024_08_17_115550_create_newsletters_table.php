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
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('subject'); // Kolom untuk subjek newsletter
            $table->text('content');   // Kolom untuk konten newsletter
            $table->timestamp('sent_at')->nullable(); // Waktu ketika newsletter dikirim
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletters');
    }
};
