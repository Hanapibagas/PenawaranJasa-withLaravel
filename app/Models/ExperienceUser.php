<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail_users_id',
        'experience'
    ];

    public function DetailUsers()
    {
        return $this->belongsTo(DetailUser::class, 'detail_users_id', 'id');
    }
}
