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
        Schema::create('classes_teacher', function (Blueprint $table) {
        $table->unsignedBigInteger('class_id');
        $table->unsignedBigInteger('teacher_id');

        $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
        $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');

        $table->primary(['class_id', 'teacher_id']);    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes_teacher');
    }
};
