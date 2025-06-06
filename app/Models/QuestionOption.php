<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $fillable = [
        'question_bank_id',
        'label',
        'option',
        'is_correct'
    ];

    public function question()
    {
        return $this->belongsTo(QuestionBank::class);
    }
}
