<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->json('tags')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('tags')->nullable()->change();
        });
    }

};
