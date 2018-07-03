<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinType extends Model
{
    protected $table = 'pin_types';

    public function pin() {

        return $this->hasMany(Pin::class);
    }

    public function pin_transfer() {
        return $this->hasOne(PinTransfer::class);
    }
}
