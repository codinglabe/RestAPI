<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
