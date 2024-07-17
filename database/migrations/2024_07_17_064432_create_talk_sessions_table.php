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
        Schema::create('talk_sessions', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->uuid('man_id')->nullable()->index();
            $table->uuid('woman_id')->nullable()->index();
            $table->date('start_at')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talk_sessions');
    }
};
