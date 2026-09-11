<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();           // URL key
            $table->string('category_id');              // FK → categories.slug
            $table->string('subcategory');
            $table->string('name');
            $table->string('tagline')->nullable();
            $table->string('image')->nullable();
            $table->json('gallery')->nullable();        // array of image paths
            $table->text('description')->nullable();
            $table->json('features')->nullable();       // ["Feature 1", ...]
            $table->json('finishes')->nullable();       // ["Black Finish", ...]
            $table->string('warranty')->default('Quality Certified');
            $table->json('tech_specs')->nullable();     // {"Load": "45kg", ...}
            $table->json('sizes')->nullable();          // [{"code":"GTC 010","size":"10\"","mrp":280,"unit":"Set"},...]
            $table->timestamps();

            $table->index('category_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
