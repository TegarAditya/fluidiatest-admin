<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $fillable = [
        'question_bank_id',
        'label',
        'reason',
        'is_correct'
    ];

    public function question()
    {
        return $this->belongsTo(QuestionBank::class);
    }
}
