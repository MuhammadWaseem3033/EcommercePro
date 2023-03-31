<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('title')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('image')->nullable();
            $table->string('quantity')->nullable();
            $table->longText('description')->nullable();
            $table->longText('discount_price')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete() ;
            $table->boolean('status')->default(1);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
