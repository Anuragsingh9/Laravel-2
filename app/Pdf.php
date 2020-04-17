<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = ['full_name','street_address','zip_code','city'];
}
