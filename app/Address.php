<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    public function user()
    {
        //comando responsável por criar o relacionamento entre as tabelas.
        /*
        É chamado o método que faz referência ao modelo relacionado e a duas chaves a foreignkey e a 
        localKey que no caso são respectivamente a coluna 'user' e a coluna 'id' da tabela User
        */
        return $this->belongsTo(User::class, 'user', 'id'); 
    }
}
