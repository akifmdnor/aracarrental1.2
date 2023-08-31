<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarCondition extends Model
{
    use SoftDeletes;
    protected $fillable = ['booking_id' , 'file_name' , 'condition'];

    public function booking()
    {
        return $this->belongsTo('App\Booking');
    }
}
