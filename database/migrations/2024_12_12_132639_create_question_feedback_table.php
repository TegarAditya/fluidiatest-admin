<?php

use App\Models\QuestionBank;
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
        Schema::create('question_feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(QuestionBank::class)->constrained()->cascadeOnDelete();
            $table->integer('score');
            $table->text('feedback');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_feedback');
    }
};
