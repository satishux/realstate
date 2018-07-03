<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinRequest extends Model
{
    protected $table = 'pin_requests';

    protected $fillable = [
        'user_id', 'pin_type_id', 'quantity', 'status', 'transaction_no'
    ];

    public function pin_type() {
        return $this->belongsTo(PinType::class);
    }
}
