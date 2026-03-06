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
        Schema::table('products', function (Blueprint $table) {
            // ubah description menjadi text
            $table->text('description')->change();

            // ubah price menjadi decimal(10,2)
            $table->decimal('price', 10, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // rollback description ke string
            $table->string('description')->change();

            // rollback price ke string
            $table->string('price')->change();
        });
    }
};
