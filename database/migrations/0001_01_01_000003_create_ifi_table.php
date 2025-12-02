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
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->string('investor_id')->unique();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->string('fund_id')->unique();
            $table->string('fund_name')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });

        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('investment_id')->unique();
            $table->string('investor_id');
            $table->string('fund_id');
            $table->decimal('amount', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investors');
        Schema::dropIfExists('funds');
        Schema::dropIfExists('investments');
    }
};

?>