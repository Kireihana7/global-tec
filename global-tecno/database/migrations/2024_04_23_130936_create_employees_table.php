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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 20);
            $table->string('middle_name', 20);
            $table->string('last_name', 20);
            $table->string('other_name', 50);
            $table->string('countryJob', 150);
            $table->string('citizenship', 100);
            $table->string('personal_ID', 20);
            $table->string('type_ID', 50);
            $table->string('email', 100);
            $table->dateTime('started_in', precision: 0);
            $table->string('area', 100);
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
