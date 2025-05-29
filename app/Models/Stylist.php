<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'gender',   
        'birth_date',
        'address_province',
    ];

    public function getBirthYearAttribute()
    {
        return date('Y', strtotime($this->birth_date));
    }
}
