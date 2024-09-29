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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->string('street');
            $table->string('sitio');
            $table->string('village');
            $table->string('contact_num');
            $table->string('em_contact_name');
            $table->string('em_contact_num');
            $table->date('birthdate');
            $table->string('birthplace');
            $table->string('civil_status');
            $table->string('gender');
            $table->string('religion');
            $table->string('occupation')->nullable();
            $table->string('classification_status');
            $table->string('valid_id');
            $table->string('id_num');
            $table->string('picture_id');
            $table->string('picture_holding_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
