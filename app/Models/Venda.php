<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public function Venda()
    {
        return $this->hasMany(Produto::class);
    }

    protected $fillable = [
        'cep',
        'endereco',
        'uf',
        'cidade',
        'bairro'
    ];
   
}
