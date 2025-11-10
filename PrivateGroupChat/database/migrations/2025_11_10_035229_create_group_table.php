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
        Schema::create('groups', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Group Name
            $table->string('name')->nullable();

            // Foreign Key Definition: owner_id references users_id in the users table
            // It must be a string to match the type of users_id.
            $table->string('owner_id')->nullable();

            $table->foreign('owner_id')
                  ->references('users_id') // References the specific column
                  ->on('users')            // In the specific table
                  ->onDelete('set null');  // Set the FK to NULL if the owner user is deleted

            // Privacy Flag
            $table->boolean('is_private')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
