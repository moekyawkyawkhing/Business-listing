<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable=[
      'user_id',
      'name',
      'email',
      'website',
      'phone',
      'address',
      'bio'
    ];
}
