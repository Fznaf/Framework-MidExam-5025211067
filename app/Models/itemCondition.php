<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemCondition extends Model
{
    use HasFactory;
    protected $table = 'itemCondition';

    protected $fillable = [
        'itemCondition'
    ];
}
