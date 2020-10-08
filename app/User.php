<?php

namespace App;

use Gabievi\Promocodes\Traits\Rewardable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Stripe\Terminal\Location;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable, Rewardable;

    protected $primaryKey = 'userId';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'email',
        'compId',
        'password',
        'indicMobile',
        'mobile',
        'stripeId',
        'crispId',
        'dateOfBirth',
        'rank',
        'blocked'
    ];

    public function getRememberTokenName()
    {
        return null;
    }
}
