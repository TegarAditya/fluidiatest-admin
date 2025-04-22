<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamResponse extends Model
{
    protected $fillable = [
        'exam_attempt_id',
        'question_bank_id',
        'question_option_id',
        'reason_id',
    ];

    public function attempt()
    {
        return $this->belongsTo(ExamAttempt::class, 'exam_attempt_id', 'id');
    }

    public function question()
    {
        return $this->belongsTo(QuestionBank::class, 'question_bank_id', 'id');
    }

    public function option()
    {
        return $this->belongsTo(QuestionOption::class, 'question_option_id', 'id');
    }

    public function reason()
    {
        return $this->belongsTo(Reason::class, 'reason_id', 'id');
    }

    public function getScoreAttribute()
    {
        $isOptionCorrect = $this->option?->is_correct ?? false;
        $isReasonCorrect = $this->reason?->is_correct ?? false;

        if ($this->attempt->exam->is_multi_tier) {
            return match (true) {
                $isOptionCorrect && $isReasonCorrect => 4,
                $isOptionCorrect => 3,
                $isReasonCorrect => 2,
                $this->option || $this->reason => 1,
                default => 0,
            };
        }

        return $isOptionCorrect ? 1 : 0;
    }
}
