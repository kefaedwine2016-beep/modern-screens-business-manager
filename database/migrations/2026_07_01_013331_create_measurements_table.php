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
        Schema::create('measurements', function (Blueprint $table) {

            $table->id();

            // Customer
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');

            // Location
            $table->string('room');
            $table->string('opening_name');

            // Dimensions
            $table->decimal('width', 8, 2);
            $table->decimal('height', 8, 2);

            // Product
            $table->string('screen_type');

            // Quantity
            $table->integer('quantity')->default(1);

            // Notes
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurements');
    }
};