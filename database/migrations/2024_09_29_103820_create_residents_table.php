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
            $table->string('street')->nullable();
            $table->string('sitio')->nullable();
            $table->string('village')->nullable();
            $table->string('contact_num')->nullable();
            $table->string('em_contact_name')->nullable();
            $table->string('em_contact_num')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('occupation')->nullable();
            $table->string('classification_status')->nullable();
            $table->string('valid_id')->nullable();
            $table->string('id_num')->nullable();
            $table->string('picture_id')->nullable();
            $table->string('picture_holding_id')->nullable();
            $table->timestamps();

            // php artisan make:migration add_user_id_to_residents_table --table=residents
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
