<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinTransfer extends Model
{
    protected $table = 'pin_transfer';

    protected $fillable = [
        'pin_no', 'pin_type_id', 'reciver_id', 'sender_id'
    ];

    public function pin_type() {
        return $this->belongsTo(PinType::class);
    }

    public function sender() {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function reciver() {
        return $this->belongsTo(User::class, 'reciver_id');
    }
}
