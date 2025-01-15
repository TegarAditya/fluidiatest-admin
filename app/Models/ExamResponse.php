<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamResponse extends Model
{
    protected $fillable = ['exam_attempt_id', 'question_bank_id', 'question_option_id', 'is_correct', 'is_skipped', 'is_marked', 'marks', 'feedback', 'reason'];
}
