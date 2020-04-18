<?php

namespace App;


use Illuminate\Database\Eloquent\Model;



class Author extends Model
{

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
