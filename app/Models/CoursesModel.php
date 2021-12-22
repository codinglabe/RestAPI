<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
