<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionPack extends Model
{
    protected $fillable = ['code', 'duration', 'description', 'is_active'];

    public function questions()
    {
        return $this->belongsToMany(QuestionBank::class, 'question_pack_question_bank', 'question_pack_id', 'question_bank_id');
    }

    public function questionPackQuestionBank()
    {
        return $this->hasMany(QuestionPackQuestionBank::class);
    }
}
