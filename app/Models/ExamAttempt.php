<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamAttempt extends Model
{
    protected $fillable = ['student_id', 'question_pack_id', 'attempt_id'];

    public function student()
    {
        return $this->belongsTo(User::class);
    }

    public function exam()
    {
        return $this->belongsTo(QuestionPack::class);
    }

    public function responses()
    {
        return $this->hasMany(ExamResponse::class);
    }
}
