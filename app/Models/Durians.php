<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Durians extends Model
{
    use HasFactory;

    protected $table = 'durians';
    protected $primaryKey = 'id_durian';
    protected $guarded = [];
}
