<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'profile_id',
        'title',
        'description',
        'img',
        'date',
        'featured'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
