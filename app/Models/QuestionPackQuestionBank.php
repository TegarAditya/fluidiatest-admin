<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionPackQuestionBank extends Model
{
    protected $fillable = ['question_pack_id', 'question_bank_id'];

    public function question()
    {
        return $this->belongsTo(QuestionBank::class);
    }

    public function questionPack()
    {
        return $this->belongsTo(QuestionPack::class);
    }
}
