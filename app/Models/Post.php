<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "title", "com", "file", "board_id", "quoting_id", "thread_id", "id"
    ];

    public function quoters() {
        return $this->belongsToMany(Post::class, 'post_post', 'quoted_id', 'quoter_id');
    }

    public function quoted() {
        return $this->belongsToMany(Post::class, 'post_post', 'quoter_id', 'quoted_id');
    }

    public function replies() {
        return $this->hasMany(Post::class, 'thread_id');
    }
}
