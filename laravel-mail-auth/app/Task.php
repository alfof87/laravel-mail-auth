<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public $table = 'tasks';
  protected $fillable = [
    'name',
    'description',
    'start_date',
    'end_date'
  ];
}
