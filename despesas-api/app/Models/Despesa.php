<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Despesa extends Model
{
    use HasFactory;
    

    // Definir o nome da tabela (opcional, se o nome da tabela for diferente do plural de 'Despesa')
    protected $table = 'despesas';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'descricao',
        'valor',
        'data',
        'categoria',
        'usuario_id', // FK, se houver
    ];

    // Definir um relacionamento com o modelo User, se necessário
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

}
