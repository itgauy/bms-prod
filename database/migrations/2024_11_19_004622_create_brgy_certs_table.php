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
        Schema::create('brgy_certs', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->number('cost');
            $table->string('cert_type');
            $table->string('name');
            $table->string('address');
            $table->date('date_claimed');
            $table->string('specific_request');
            $table->timestamps();

            $table->foreign('resident_id')->references('id')->on('residents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brgy_certs');
    }
};
