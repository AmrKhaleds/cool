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
        Schema::table('banner_settings', function (Blueprint $table) {
            $table->json('review')->nullable()->after('link_title');
            $table->tinyInteger('stars')->default(0)->max(5)->after('review');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banner_settings', function (Blueprint $table) {
            $table->dropColumn('review');
            $table->dropColumn('stars');
        });
    }
};
