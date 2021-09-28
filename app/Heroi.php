<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heroi extends Model
{
    protected $fillable = ['nome', 'poderes', 'fraquezas', 'image'];
}
