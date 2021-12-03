<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function transaction(){
        return $this->hasOne(Transaction::class, 'scheduleID', 'id');
    }

    public function speaker(){
        return $this->belongsTo(Speaker::class, 'speakerID', 'id');
    }
}
