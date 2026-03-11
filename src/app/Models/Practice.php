<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;

    protected $fillable = [
        'last',
        'first',
        'gender',
        'email',
        'tel',
        'address',
        'address2',
        'select',
        'content'
    ];
}
