<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  public $table = 'locations';
  protected $fillable = [
    'name',
    'street',
    'city',
    'state'
  ];
  public function employees(){
  return $this -> hasMany(Employee::class);
}
}
