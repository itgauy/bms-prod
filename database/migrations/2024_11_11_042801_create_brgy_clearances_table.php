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
        Schema::create('brgy_clearances', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->string('position');
            $table->string('business_type');
            $table->string('business_name');
            $table->string('business_address');
            $table->date('date_claimed');
            $table->string('contact_person');
            $table->string('contact_position');
            $table->string('contact_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brgy_clearances');
    }
};
