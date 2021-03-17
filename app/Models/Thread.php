<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'title', 'com', 'file', 'board_id'
    ];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
