<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [

        'name_patient',
        'first_name_patient',
        'age_patient',
        'kind_patient',
        'num_tel_patient',
        'email_patient',
    ];

    public function ordereds()
    {
        return $this->hasMany(Ordered::class);
    }
}
