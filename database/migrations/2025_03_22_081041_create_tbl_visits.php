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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('VisitID');
            $table->string('VisitDate');
            $table->string('VisitFacility');
            $table->string('AttendingPersonnel');
            $table->string('ChildCode');
            $table->string('Weight');
            $table->string('Height');
            $table->string('Age');
            $table->timestamps();
        });
    }

    /*** Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
