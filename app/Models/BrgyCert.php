<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrgyCert extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'category',
        'cost',
        'cert_type',
        'name',
        'address',
        'date_claimed',
        'specific_request',
    ];
}
