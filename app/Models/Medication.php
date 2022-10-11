<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'pharmacist_id',
        'category_id',
        'invoice_id',
        'name_medication',
        'manufacturing_date',
        'Expiry_date',
        'description_medication',
    ];
}
