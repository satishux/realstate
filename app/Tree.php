<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $table = 'tree';

    protected $fillable = [
        'user_id', 'parent_id', 'left', 'right', 'depth'
    ];
}
