<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemType extends Model
{
   
    use HasFactory;
    protected $table = 'itemType';

    protected $fillable = [
        'itemType',
        'itemCondition'
    ];
}
