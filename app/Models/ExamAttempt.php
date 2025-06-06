<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamAttempt extends Model
{
    protected $fillable = [
        'user_id',
        'question_pack_id',
        'attempt_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exam()
    {
        return $this->belongsTo(QuestionPack::class, 'question_pack_id', 'id');
    }

    public function responses()
    {
        return $this->hasMany(ExamResponse::class)->whereIn('question_bank_id', $this->exam->questions->pluck('id'));
    }

    public function getTotalScoreAttribute()
    {
        return $this->responses->sum('score');
    }
}
