<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected  $fillable = [
   'first_name
    middle_name
    last_name
    other_name
    countryJob
    citizenship
    personal_ID
    type_ID
    email',
    'started_in',
    'area',
    'status'
      ];
    use HasFactory;

}
