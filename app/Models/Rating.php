<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Rating extends Model
{
    use HasFactory;
    protected $table = 'rating';

    public function topic()
    {
        return $this->belongsTo(topic::class, 'c_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'uid');
    }
}
