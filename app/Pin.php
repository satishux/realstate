<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    
    public function pin_type() {
        return $this->belongsTo(PinType::class);
    }
}
