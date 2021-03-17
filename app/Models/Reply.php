<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "title", "com", "file", "thread_id", "reply_id"
    ];

    public function quotes() {
        return $this->belongsToMany(Reply::class, 'replies_replies', 'quote_id', 'reply_id');
    }

    public function quoting() {
        return $this->belongsToMany(Reply::class, 'replies_replies', 'reply_id', 'quote_id');
    }
}
