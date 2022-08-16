<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function Produto()
    {
        return $this->hasOne(Fornecedor::class).$this->belongsTo(Venda::class);
    }

    protected $fillable = [
        'nome',
        'valor',
        'fornecedor_id'
    ];


}
