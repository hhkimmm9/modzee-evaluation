<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'bio',
        'profile_picture',
    ];

    public function albums()
    {
        return $this->hasMany(Profile::class);
    }
}
