<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendedor_id',
        'card_id',
        'busstation_id',
        'numdoc_cliente',
        'nombre_cliente'
    ];
    
    public function busstation()
    {
        return $this->belongsTo(Busstation::class);
    }
    
        public function seller()
        {
            return $this->belongsTo(Seller::class);
        }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
