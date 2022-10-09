<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    protected $fillable = [

        'cashier_id',
        'description_invoice',
        'amount',
        'new_date_invoice',
    ];

    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }
}
