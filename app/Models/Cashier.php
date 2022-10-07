<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    use HasFactory;

    protected $fillable = [

        'name_cashier',
        'first_name_cashier',
        'num_tel_cashier',
        'email_cashier',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
