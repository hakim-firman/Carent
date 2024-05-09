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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')
            ->constrained(
                table: 'cars', indexName: 'rental_car_id'
            );
            $table->foreignId('user_id')
            ->constrained(
                table: 'users', indexName: 'rental_user_id'
            );
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->date('tanggal_pengembalian')->default(null);
            $table->enum('status',['disewa','dikembalikan','terlambat'])->default('disewa');
            $table->integer('pembayaran');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
