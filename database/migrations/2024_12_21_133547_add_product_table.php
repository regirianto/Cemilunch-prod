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
        //
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom primary key 'id'
            $table->string('name'); // Kolom untuk nama produk
            $table->integer('stock'); // Kolom untuk jumlah stok produk
            $table->decimal('price', 10, 2); // Kolom untuk harga produk dengan tipe data decimal
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->text('description')->nullable(); // Kolom untuk deskripsi produk
            $table->string('image_url')->nullable(); // Kolom 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('products');
    }
};
