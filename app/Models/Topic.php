<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Rating;

class Topic extends Model
{
    use HasFactory;
    
    protected $table = 'topics';
    protected $fillable = [
        'photo',
        'video',
        'topic',
        'category',
        'description',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'category_id', 'id');
    }

    

  
}
