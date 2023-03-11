<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'title',
        'body',
    ];

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
