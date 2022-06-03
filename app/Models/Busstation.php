<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busstation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'ciudad'
    ];

    public function sells() {
        return $this->hasMany(Sell::class);
    }
}
