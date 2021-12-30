<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        "companyName",
        "companyAddress",
        "phoneNumber",
        "mail",
        "other",
    ];
    use HasFactory;
}
