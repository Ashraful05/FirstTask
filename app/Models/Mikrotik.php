<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mikrotik extends Model
{
    use HasFactory;

    protected $fillable=['user_name','password','ssh_port','api_port','ip_address'];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->activation_status_id = ActivationStatus::$ACTIVE;
            // $model->router_type_id = 1;
        });

    }

    public function routerType()
    {
        return $this->belongsTo(RouterType::class);
    }
    public function status()
    {
        return $this->belongsTo(ActivationStatus::class,'activation_status_id');
    }
    //model er sathe function name na mille foreign key mention kore dite hobe....
//    public function activationStatus()
//    {
//        return $this->belongsTo(ActivationStatus::class);
//    }


}
