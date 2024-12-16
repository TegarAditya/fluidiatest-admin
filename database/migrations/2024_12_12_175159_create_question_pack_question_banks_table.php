<?php

use App\Models\QuestionBank;
use App\Models\QuestionPack;
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
        Schema::create('question_pack_question_banks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(QuestionPack::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(QuestionBank::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_pack_question_banks');
    }
};
