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
        Schema::create('phone', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('model');
            $table->string('serial_num');
            $table->string('ramRom')->nullable();
            $table->string('imei')->nullable();
            $table->string('issued_accessories');
            $table->boolean('with_cashout');
            $table->string('issued_to');
            $table->date('date_issued');
            $table->string('issued_by');
            $table->boolean('issuedAcknowledgementIT');
            $table->boolean('issuedAcknowledgementPurchasing');
            $table->string('returned_accessories')->nullable();
            $table->string('returned_by')->nullable();
            $table->date('returned_date')->nullable();
            $table->string('returned_to')->nullable();
            $table->boolean('returnedAcknowledgementIT');
            $table->boolean('returnedAcknowledgementPurchasing');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone');
    }
};
