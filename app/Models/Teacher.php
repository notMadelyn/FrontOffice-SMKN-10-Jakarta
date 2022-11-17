<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hour_start',
        'hour_end',
        'subject',
        'days_id',
        'rooms_id',
        'majors_id'
    ];

    public function days(){
        return $this->belongsTo(Day::class, 'id');
    }

    public function rooms(){
        return $this->belongsToMany(Room::class, 'id', 'room_id');
    }

    public function majors(){
        return $this->belongsToMany(Major::class, 'id', 'major_id');
    }
}
//public function meet(){
    // return $this->hasOne(Meet::class, 'id' , 'meet_id');
// }