<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $primaryKey = 'test_id';
    protected $fillable = [
        'name', 'age',
    ];



}
