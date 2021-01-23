<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Visits extends  Eloquent
{
    //use HasFactory;
    public $timestamps = false;
    protected $connection = 'mongodb';
    protected $collection = 'visits';

    protected $fillable = [
        'ip', 'Datetime'
    ];
}

