<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    // table name
    protected $table = 'station';
    // primary Key
    protected $primaryKey = 'id';
}
