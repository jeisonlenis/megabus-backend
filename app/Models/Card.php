<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'unidades',
        'precio',
        'valor_recaudos'
    ];
    
  /*   public function sells() {
        return $this->hasMany(Sell::class);
    } */
}
