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
        Schema::create('book_name', function (Blueprint $table) {
            $table->id();
            $table->text('Book_Name')->nullable();
            $table->text('Author_Name')->nullable();
            $table->decimal('Price', 13, 2)->default(0);
            $table->string('file_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_name');
    }
};
