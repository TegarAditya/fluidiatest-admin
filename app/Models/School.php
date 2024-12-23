<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'code',
        'name',
        'address',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
