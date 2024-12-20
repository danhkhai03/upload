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
        
        Schema::table('images', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->change(); // Thay đổi thành nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->change(); // Khôi phục lại nếu cần
        });
    }
};
