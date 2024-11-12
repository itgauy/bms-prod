<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrgyClearance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'name',
        'position',
        'business_type',
        'business_name',
        'business_address',
        'date_claimed',
        'contact_person',
        'contact_position',
        'contact_number',
    ];
}
