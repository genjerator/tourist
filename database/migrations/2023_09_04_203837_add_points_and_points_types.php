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
        Schema::create('point_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->text('description')->nullable();
        });
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->integer('value');
            $table->unsignedBigInteger('point_type_id');
            $table->foreign('point_type_id')
                ->references('id')->on('point_types');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
