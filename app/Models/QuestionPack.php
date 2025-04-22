<?php

namespace App\Models;

use Hidehalo\Nanoid\Client;
use Illuminate\Database\Eloquent\Model;

class QuestionPack extends Model
{
    protected $fillable = ['public_id', 'code', 'duration', 'description', 'is_active', 'is_multi_tier'];

    public function questions()
    {
        return $this->belongsToMany(QuestionBank::class, 'question_pack_question_banks', 'question_pack_id', 'question_bank_id');
    }

    public function questionPackQuestionBank()
    {
        return $this->hasMany(QuestionPackQuestionBank::class);
    }

    public function examAttempts()
    {
        return $this->hasMany(ExamAttempt::class);
    }

    protected static function boot()
    {
        parent::boot();

        $nanoid = new Client();

        $generatePublicId = function ($model) use ($nanoid) {
            if ($model->public_id === null) {
                $model->public_id = generatePublicId();
            }
        };

        QuestionPack::creating($generatePublicId);
        QuestionPack::updating($generatePublicId);
    }
}
