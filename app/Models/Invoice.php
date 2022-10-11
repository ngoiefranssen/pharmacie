<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [

        'cashier_id',
        'description_invoice',
        'amount',
        'date_invoice',
    ];

    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }

    public function medications()
    {
        return $this->hasMany(Medication::class);
    }
}
