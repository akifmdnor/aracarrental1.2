<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'plat_number',
        'car_model_id',
        'roadtax_expiry_date',
        'owner_name',
        'owner_ic',
        'added_by',
        'year',
        'status',
        'reference_id',
    ];

    public function pictures()
    {
        return $this->hasMany('App\Picture' , 'model_id')->where('model_name', '=', 'car');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    public function car_model()
    {
        return $this->belongsTo('App\CarModel');
    }
}
