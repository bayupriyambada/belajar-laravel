<?php

namespace App\Models;

use App\Models\StudentsModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Major extends Model
{
    use HasFactory;

    public function student(): HasMany
    {
        return $this->hasMany(StudentsModel::class, 'id', 'students_id');
    }
}
