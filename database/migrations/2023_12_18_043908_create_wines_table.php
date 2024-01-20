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
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('user_id')->default(0);
            $table->string('name')->default(0);
            $table->string('year')->default(0);
            $table->string('grapes')->default(0);
            $table->string('country')->default(0);
            $table->string('region')->default(0);
            $table->string('description')->default(0);
            $table->string('picture')->default(0);
            $table->decimal('price', 8, 2);
            $table->timestamps();

//            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wines', function (Blueprint $table) {
            $table->dropForeign(['id']);
        });
    }
};
