<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('enquiry_id')->unique();  // GWQ-XXXXXX
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('state')->nullable();
            $table->text('message')->nullable();
            $table->string('enquiry_type')->default('General');
            $table->json('items')->nullable();       // cart items array
            $table->string('status')->default('Pending'); // Pending | Contacted | Completed
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
