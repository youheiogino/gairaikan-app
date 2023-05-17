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
        Schema::create('dental_clinics', function (Blueprint $table) {
            $table->id();
            $table->string('pref_name');
            $table->string('type'); // 区分
            $table->string('name');
            $table->string('zip');
            $table->text('address');
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('num_beds')->nullable();
            $table->point('location');
            $table->longText('accepts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_clinics');
    }
};
