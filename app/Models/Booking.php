<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'car_model_id',
        'car_id',
        'staff_id',
        'branch_id',
        'user_id',
        'pickup_datetime',
        'dropoff_datetime',
        'pickup_location',
        'dropoff_location',
        'driver_name',
        'driver_IC',
        'driver_license',
        'driver_mobile_number',
        'driver_age',
        'booking_status',
        'payment_status',
        'contract_status',
        'car_condition_status',
        'duration_days',
        'duration_hours',
        'amount',
        'amount_distance',
        'amount_rent',
        'amount_addon',
        'amount_addon_branch',
        'pickup_distance',
        'dropoff_distance',
        'mode',
        'pickup_latitude',
        'pickup_longitude',
        'dropoff_latitude',
        'dropoff_longitude',
        'notes',
        'amount_secd',
        'amount_paid',
        'amount_delivery',
        'amount_dropoff',
        'coupon',
      ];

    public function branch()
    {
        return $this->belongsTo('App\Branch')->withTrashed();
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff')->withTrashed();
    }

    public function car()
    {
        return $this->belongsTo('App\Car')->withTrashed();
    }

    public function car_model()
    {
        return $this->belongsTo('App\CarModel')->withTrashed();
    }


    public function user()
    {
        return $this->belongsTo('App\User')->withTrashed();
    }

    public function car_conditions()
    {
        return $this->hasMany('App\CarCondition');
    }

    public function addonbookings()
    {
        return $this->hasMany('App\AddOnBookings');
    }

    public function contract()
    {
        return $this->hasOne('App\Contract');
    }

    public function pictures()
    {
        return $this->hasMany('App\Picture' , 'model_id')->where('model_name', '=', 'booking');
    }

}
