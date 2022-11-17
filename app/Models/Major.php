<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class'
    ];

    public function teachers(){
        return $this->belongsToMany(Teacher::class, 'id');
    }

    public function students(){
        return $this->hasMany(Student::class,'id');
    }
}
