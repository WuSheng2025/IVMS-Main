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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('ChildCode');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('LastName');
            $table->string('BirthDate');
            $table->string('BirthPlace');
            $table->string('BirthFacility');
            $table->string('MotherMaidenName');
            $table->string('FatherName');
            $table->string('Municipality');
            $table->string('Barangay');
            $table->string('Province');
            $table->string('Purok');
            $table->string('Street');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
