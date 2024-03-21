<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = ['publication', 'date', 'visibility', 'language_id', 'framework_id', 'comment_id', 'user_id', 'vote_range'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

