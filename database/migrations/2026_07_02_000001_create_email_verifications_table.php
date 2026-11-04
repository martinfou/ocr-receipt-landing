<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('email_verifications', function (Blueprint $table) {
            $table->id();
            $table->string('email')->index();
            $table->string('token', 6);
            $table->string('tier', 32)->default('pro');
            $table->string('stripe_session_id', 255)->nullable()->index();
            $table->timestamp('expires_at');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });

        if (Schema::hasTable('license_purchases') && !Schema::hasColumn('license_purchases', 'edition')) {
            Schema::table('license_purchases', function (Blueprint $table) {
                $table->string('edition', 32)->default('pro')->after('license_key');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('email_verifications');
    }
};

