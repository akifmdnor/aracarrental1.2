<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Secd extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'booking_id',
        'user_id',
        'branch_id',
        'payment_status',
        'bank_name',
        'bank_number',
        'staff_id',
        'payment_date',
    ];

    public function picture()
    {
        return $this->hasMany('App\Picture' , 'model_id')->where('model_name', '=', 'review');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff');
    }

    public function booking()
    {
        return $this->hasOne('App\Booking');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }

}
