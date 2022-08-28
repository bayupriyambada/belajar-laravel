<?php

namespace App\Models;

use App\Models\Major;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentsModel extends Model
{
    protected $table = 'students';
    use HasFactory;

    public function major()
    {
        return $this->hasOne(Major::class, 'students_id', 'id');
    }
}
