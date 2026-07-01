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
        Schema::create('site_visits', function (Blueprint $table) {

            $table->id();

            // Customer
            $table->foreignId('customer_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // Visit Information
            $table->string('visit_number')->unique();

            $table->date('visit_date');

            $table->string('property_name');

            $table->string('estate')->nullable();

            $table->string('technician');

            $table->enum('status', [
                'Scheduled',
                'Measuring',
                'Quoted',
                'Approved',
                'Installed',
                'Completed',
            ])->default('Scheduled');

            $table->text('notes')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_visits');
    }
};