<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class CarModel extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'model_name',
        'category',
        'security_deposit',
        'branch_id',
        'price_day',
        'price_hours',
        'price_day_2',
        'price_day_3',
        'price_day_4',
        'price_day_5',
        'price_day_6',
        'price_day_7',
        'price_day_14',
        'price_day_21',
        'price_day_28',
        'price_day_after_month',
        'price_day_branch',
        'price_hours_branch',
        'price_day_2_branch',
        'price_day_3_branch',
        'price_day_4_branch',
        'price_day_5_branch',
        'price_day_6_branch',
        'price_day_7_branch',
        'price_day_14_branch',
        'price_day_21_branch',
        'price_day_28_branch',
        'price_day_after_month_branch',
        'model_specification_id',
        'is_deactive'
    ];


    public function cars()
    {
        return $this->hasMany('App\Car');
    }
    
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    public function pictures()
    {
        return $this->hasMany('App\Picture' , 'model_id')->where('model_name', '=', 'car_model');
    }

    public function addoncars()
    {
        return $this->hasMany('App\AddOnCars');
    }

    public function model_specification()
    {
        return $this->belongsTo('App\ModelSpecification')->withTrashed();
    }
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('hasBranch', function (Builder $builder) {
            $builder->whereHas('branch');
        });
    }

}
