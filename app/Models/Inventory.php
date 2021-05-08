<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'supplier';
    protected $fillable = ['id','serial','material','mname','inventory','picture'];
}