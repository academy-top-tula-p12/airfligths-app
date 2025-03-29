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
        Schema::table("flights", function(Blueprint $table){
            $table->boolean("activity")->default(1);
            $table->integer("passangers_count")->nullable();
            $table->decimal("price", 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("flights", function(Blueprint $table){
            $table->dropColumn(["activity", "passangers_count", "price"]);
        });
    }
};
