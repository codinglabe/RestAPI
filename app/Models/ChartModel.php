<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChartModel extends Model
{
    protected $table = 'chart';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    

}
