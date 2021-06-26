<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    // table name
    protected $table = 'trip';
    // primary Key
    protected $primaryKey = 'id';
    // timestamps
    public $timestamps = false;
}
