<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('license_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('email')->index();
            $table->string('license_key', 128)->unique();
            $table->string('stripe_session_id', 255)->unique();
            $table->string('stripe_payment_intent', 255)->nullable();
            $table->string('status', 20)->default('pending'); // pending, completed, refunded
            $table->integer('amount_cents')->default(19900); // $199.00
            $table->string('version', 10)->default('1.0');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('license_purchases');
    }
};
