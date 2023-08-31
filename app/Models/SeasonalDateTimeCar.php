<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeasonalDateTimeCar extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'seasonal_date_time_id',
        'car_model_id',
    ];


    public function car_model()
    {
        return $this->belongsTo('App\CarModel')->withTrashed();
    }

    public function seasonal_date_time()
    {
        return $this->belongsTo('App\RestrictedDateTime');
    }
}
