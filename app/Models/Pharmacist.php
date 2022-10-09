<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    use HasFactory;

    protected $fillable = [

        'name_pharmacist',
        'first_name_pharmacist',
        'num_tel_pharmacist',
        'email_pharmacist',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
