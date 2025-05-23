<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
    public function requests()
    {
        return $this->hasMany(ServiceRequest::class, 'service_id');
    }
}
