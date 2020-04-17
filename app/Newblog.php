<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newblog extends Model
{
    protected $table='uploads';
    protected $fillable = ['mime','original_filename','filename'];

}
