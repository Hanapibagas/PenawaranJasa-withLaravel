<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvantageService extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_id',
        'advantage',
    ];

    public function Services()
    {
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }
}
