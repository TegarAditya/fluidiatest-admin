<?php

use App\Models\ExamAttempt;
use App\Models\QuestionBank;
use App\Models\QuestionOption;
use App\Models\Reason;
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
        Schema::create('exam_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ExamAttempt::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(QuestionBank::class);
            $table->foreignIdFor(QuestionOption::class)->nullable();
            $table->foreignIdFor(Reason::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_responses');
    }
};
