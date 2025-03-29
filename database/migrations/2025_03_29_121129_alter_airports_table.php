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
        Schema::table("airports", function(Blueprint $table){
            $table->boolean("activity")->default(1);
            $table->boolean("international")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("airports", function(Blueprint $table){
            $table->dropColumn(["activity", "international"]);
        });
    }
};
