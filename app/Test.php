<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    
    public $timestamps = true;

    protected $fillable = ['text'];
}
