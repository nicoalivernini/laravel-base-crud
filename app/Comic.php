<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  protected $fillable = [
    'thumb',
    'title',
    'description',
    'price',
    'sale_date',
    'series',
    'type'
  ];
}
