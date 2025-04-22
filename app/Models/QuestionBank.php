<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    protected $fillable = ['code', 'question'];

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(QuestionFeedback::class);
    }

    public function reasons()
    {
        return $this->hasMany(Reason::class);
    }

    public function packs()
    {
        return $this->belongsToMany(QuestionPack::class, 'question_pack_question_banks', 'question_bank_id', 'question_pack_id');
    }
}
