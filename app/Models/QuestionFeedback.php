<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionFeedback extends Model
{
    protected $fillable = [
        'question_bank_id',
        'score',
        'feedback'
    ];

    public function question()
    {
        return $this->belongsTo(QuestionBank::class);
    }
}
