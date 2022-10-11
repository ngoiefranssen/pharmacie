<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = 
    [
        'pharmacist_id',
        'name_category',
        'description_category',
    ];

    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);
    }

    public function medications()
    {
        return $this->hasMany(Medication::class);
    }
}
