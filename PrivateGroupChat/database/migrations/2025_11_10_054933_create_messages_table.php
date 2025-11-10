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
        Schema::create('messages', function (Blueprint $table) {
            // 1. id bigint(20) UNSIGNED No None AUTO_INCREMENT (Primary Key)
            $table->id();

            // 2. group_id (Foreign Key to groups.id)
            $table->unsignedBigInteger('group_id')->nullable();

            // Define the explicit foreign key constraint for group_id
            $table->foreign('group_id')
                  ->references('id')
                  ->on('groups')
                  ->onDelete('cascade'); // If the group is deleted, delete its messages

            // 3. users_id (Foreign Key to users.users_id)
            $table->string('users_id')->nullable();

            // Define the explicit foreign key constraint for users_id
            $table->foreign('users_id')
                  ->references('users_id') // References the specific unique column
                  ->on('users')
                  ->onDelete('set null'); // Set sender to NULL if the user is deleted

            // 4. content
            $table->text('content')->nullable();

            // 5. is_read (tinyint(1) Yes NULL)
            $table->boolean('is_read')->default(false)->nullable();

            // 6. send_on datetime Yes NULL
            // Use 'timestamp' for consistency with Laravel, but 'dateTime' is an option too.
            $table->dateTime('send_on')->nullable();

            // 7. updated_at datetime Yes NULL
            // Note: We typically include 'created_at' as well, but based on your schema,
            // we will only add the standard Laravel timestamps helper.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
