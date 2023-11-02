<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    const UPDATED_AT = null;
    protected $fillable = [
        'customer',
        'style',
        'type',
        'container',
        'model',
        'item',
        'color',
        'params',
        'size',
        'po',
        'unit',
        'qty',
        'date',
        'note',
    ];
}
