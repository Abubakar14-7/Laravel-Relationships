<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            // Foreign key to job_categories, NOT NULL
            $table->foreignId('job_category_id')
                  ->constrained('job_categories')
                  ->onDelete('cascade');

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->timestamps();
            $table->softDeletes(); // optional for soft deletes
        });
    }

    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            // drop foreign key first
            $table->dropForeign(['job_category_id']);
        });

        Schema::dropIfExists('jobs');
    }
};
