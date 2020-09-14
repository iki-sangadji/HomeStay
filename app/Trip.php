<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'tb_trip';
    protected $primaryKey = "id_trip";
}
