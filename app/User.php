<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'dob',
        'gender', 'marital_status',
        'address', 'state', 'city',
        'contact_no', 'position',
        'sponsor_id', 'parent_id',
        'role_id','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function pin_transfered() {
        return $this->hasMany(PinTransfer::class, 'sender_id');
    }

    public function pin_recived() {
        return $this->hasMany(PinTransfer::class, 'reciver_id');
    }
}
