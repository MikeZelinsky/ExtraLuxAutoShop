<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'cars';

}
