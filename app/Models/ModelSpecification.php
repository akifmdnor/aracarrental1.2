<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelSpecification extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'model_name',
        'doors',
        'seats',
        'luggage',
        'fuel_type',
        'fuel_tank',
        'transmission_type',
        'included',
        'group',

    ];

    public function pictures()
    {
        return $this->hasMany('App\Picture' , 'model_id')->where('model_name', '=', 'model_specification');
    }

    public function car_models()
    {
        return $this->hasMany('App\CarModel');
    }

    public function car_model()
    {
        return $this->belongsTo('App\CarModel');
    }

    public function car_models_lowest()
    {
        return $this->hasOne('App\CarModel')->orderBy('price_day' , 'asc')->oldest();
    }


}
