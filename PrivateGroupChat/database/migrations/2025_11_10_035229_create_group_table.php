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

            // Group Details
            $table->string('name');

            // Foreign Key to the User who owns the group
            // Assumes your users table is named 'users' and uses 'id' as primary key
            $table->foreignId('owner_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Privacy Flag
            $table->boolean('is_private')->default(true); // Groups are private by default

            // Timestamps (created_at and updated_at)
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
