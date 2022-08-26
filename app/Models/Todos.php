<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    // proteksi jika nama db nya bukan todos tapi todo
    // protected $table = 'todo';
    use HasFactory;

    protected $guarded = [];
}
