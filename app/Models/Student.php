<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name', 'email', 'course'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
