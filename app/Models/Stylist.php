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


    public function getAgeAttribute()
    {
        return now()->diffInYears($this->birth_date);
    }

    public function getGenderNameAttribute()
    {
        return match($this->gender) {
            0 => 'Male',
            1 => 'Female',
        };
    }
}
