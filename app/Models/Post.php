<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function replies() {
        return $this->belongsToMany(Post::class, 'post_post', 'reply_id', 'post_id');
    }

    public function replyingTo() {
        return $this->belongsToMany(Post::class, 'post_post', 'post_id', 'reply_id');
    }
}
