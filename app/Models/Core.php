<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Core extends Model
{
    use HasFactory;

    protected $fillable = [
        'segment',
        'asal',
        'tujuan',
        'ccount',
        'good',
        'bad',
        'used',
        'total',
    ];
}
