<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = 'administrator';
    public $timestamps=false;
    protected $primaryKey = 'id_administrator';
    public $incrementing = false;

}
