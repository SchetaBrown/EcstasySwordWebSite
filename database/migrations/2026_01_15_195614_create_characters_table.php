<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->boolean('isLeader')->default(false);
            $table->json('characteristics')->nullable();

            $table
                ->foreignId('world_view_id')
                ->default(4)
                ->constrained();
            $table
                ->foreignId('guild_id')
                ->nullable()
                ->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
