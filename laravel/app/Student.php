<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    public $timestamps=false;
    protected $primaryKey = 'id_student';
    public $incrementing = false;

}
