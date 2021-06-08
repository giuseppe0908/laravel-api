<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
  protected $fillable = [
    'name',
    'price',
    'description'
  ];
}
