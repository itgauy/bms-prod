<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    
    // Specify the attributes that are mass assignable
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'street',
        'sitio',
        'village',
        'contact_num',
        'em_contact_name',
        'em_contact_num',
        'birthdate',
        'birthplace',
        'civil_status',
        'gender',
        'religion',
        'occupation',
        'classification_status',
        'valid_id',
        'id_num',
        'picture_id',
        'picture_holding_id',
        'user_id' // Foreign key to link to the User model
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}