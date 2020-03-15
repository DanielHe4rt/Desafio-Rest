<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marmitas extends Model
{
    Protected $fillable = ['id', 'nome', 'descricao', 'preco', 'estoque', 'imagem', 'desconto'];
}
