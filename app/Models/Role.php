<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
     // Specify the table name if it's not the default pluralized version
     protected $table = 'role';

     // You can also define primary key if it’s different from 'id'
     protected $primaryKey = 'id'; 
}
