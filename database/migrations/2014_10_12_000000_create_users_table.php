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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fullname');
            $table->string('address');
            $table->string('country');
            $table->string('zipcode');
            $table->string('phone')->unique();
            $table->string('ssn')->unique();
            $table->string('liscence');
            $table->string('proof_address');
            $table->string('health');
            $table->string('income');
            $table->string('role');
            $table->string('blacklist')->default('0');
            $table->string('approved')->default('0');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
