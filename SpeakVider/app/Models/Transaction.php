<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'userID', 'id');
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class, 'scheduleID', 'id');
    }
}
