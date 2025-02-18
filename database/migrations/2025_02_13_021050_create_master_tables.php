<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Tabel Tax Types
        Schema::create('tax_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->decimal('rate', 5, 2);
            $table->timestamps();
        });

        // Tabel Financial Accounts
        Schema::create('financial_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_name')->unique();
            $table->string('account_number')->unique();
            $table->string('account_type');
            $table->timestamps();
        });

        // Tabel Tax Entities
        Schema::create('tax_entities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('tax_number')->unique();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tax_types');
        Schema::dropIfExists('financial_accounts');
        Schema::dropIfExists('tax_entities');
    }
};
