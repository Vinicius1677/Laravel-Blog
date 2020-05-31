<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address()
    {   
        /*
        Aqui temos o exemplo de relacionamento de 1:1 entre os modelos User e Address, pois um usuário
        pode ter apenas um endereço fixo.
        */

        /*
        É chamado o método que faz referência ao modelo relacionado e a duas chaves a foreignkey e a 
        localKey que no caso são respectivamente a coluna 'user' e a coluna 'id' da tabela addresses.
        */
        return $this->hasOne(Address::class, 'user', 'id'); 
    }

    public function posts()
    {
        /*
        Aqui temos o exemplo de relacionamento de 1:N entre os modelos User e Post, pois um usuário
        pode ter vários posts e vários posts podem pertecer a apenas um único usuário.
        */

        /*
        É chamado o método que faz referência ao modelo relacionado e a duas chaves a foreignkey e a 
        localKey que no caso são respectivamente a coluna 'author' e a coluna 'id' da tabela posts.
        */
        return $this->hasMany(Post::class, 'author', 'id');
    }
}
