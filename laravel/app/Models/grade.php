<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\equipment;

class grade extends Model
{
    use HasFactory;
    public function get_equipment () {
        // return $this->hasOne(equipment::class, "classId");
        return $this->hasMany(equipment::class, "classId");
    }
}
