<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;


class Author extends Model
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    //Atributos que pueden ser asignados de forma masiva
    protected $fillable = [
        'name', 'gender', 'country'
    ];

}
