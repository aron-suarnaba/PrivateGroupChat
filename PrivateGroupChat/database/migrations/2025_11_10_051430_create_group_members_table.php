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
        Schema::create('group_members', function (Blueprint $table) {
            // 1. group_id (bigint(20) UNSIGNED) - Foreign key to the groups table
            // We use foreignId() which creates the correct BIGINT UNSIGNED type.
            $table->foreignId('group_id')
                  ->constrained('groups')
                  ->onDelete('cascade'); // If a group is deleted, delete the membership records

            // 2. user_id (varchar(255)) - Foreign key referencing users.users_id
            $table->string('user_id');

            // Define the explicit foreign key constraint
            $table->foreign('user_id')
                  ->references('users_id') // References the specific column
                  ->on('users')            // In the users table
                  ->onDelete('cascade');   // If a user is deleted, delete their membership records

            // 3. joined_at (datetime)
            $table->dateTime('joined_at')->nullable();

            // Define a composite primary key (No duplicates of user_id in the same group_id)
            $table->primary(['group_id', 'user_id']);

            // Laravel's default timestamps (created_at/updated_at) are not needed for this simple pivot table,
            // but you could add them if needed.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_members');
    }
};
