<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  public $table = 'Employee';
  protected $fillable = [
    'firstname',
    'lastname',
    'date_of_birth',
    'private_code',
    'location_id'
  ];
}