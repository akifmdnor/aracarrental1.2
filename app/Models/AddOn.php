<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddOn extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'branch_id',
        'title',
        'type',
        'description',
        'quantity',
    ];

    public function pictures()
    {
        return $this->hasMany('App\Picture' , 'model_id')->where('model_name', '=', 'addon');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    public function addoncars()
    {
        return $this->hasMany('App\AddOnCars');
    }

    public function addonbookings()
    {
        return $this->hasMany('App\AddOnBookings');
    }
}
