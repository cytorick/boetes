<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->hasMany(Member::class);
    }

    public function user()
    {
        return $this->hasMany(User::class, 'foreign_key');
    }
}
