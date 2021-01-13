<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    protected $table = 'consumers';
    protected $fillable= ['email', 'password','address','active'];
}
