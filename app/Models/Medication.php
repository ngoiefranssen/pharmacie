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


    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function ordereds()
    {
        return $this->hasMany(Ordered::class);
    }
}
