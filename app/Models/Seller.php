<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'apellido',
        'numero_id',
    ];

    public function sells() {
        return $this->hasMany(Sell::class);
    }
}
