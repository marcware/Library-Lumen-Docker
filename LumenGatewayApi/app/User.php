<?php


namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatedContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;



class User extends Model implements AuthenticatedContract, AuthorizableContract
{


    use Authenticatable, Authorizable;

    protected $fillable=[
        'name', 'email','password'
    ];

    protected $hidden=[
        'password',
    ];

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }

    public function can($ability, $arguments = [])
    {
        // TODO: Implement can() method.
    }
}