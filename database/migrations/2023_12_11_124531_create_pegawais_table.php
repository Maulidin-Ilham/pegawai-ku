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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("c1", [1, 2, 3,4,5]);
            $table->enum("c2", [1, 2, 3,4,5]);
            $table->enum("c3", [1, 2, 3,4,5]);
            $table->enum("c4", [1, 2, 3,4,5]);
            $table->enum("c5", [1, 2, 3,4,5]);
            $table->enum("c6", [1, 2, 3,4,5]);
            $table->enum("c7", [1, 2, 3,4,5]);
            $table->enum("c8", [1, 2, 3,4,5]);
            $table->enum("c9", [1, 2, 3,4,5]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
