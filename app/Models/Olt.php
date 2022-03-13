<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olt extends Model
{
    use HasFactory;

    protected $fillable=[
    'name',
    'username',
    'password',
    'model',
    'ip_address',
    'port',
    'activation_status_id',
    'vendor_id',
    'olt_type_id',

];
    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->activation_status_id = ActivationStatus::$ACTIVE;
            // $model->router_type_id = 1;
        });

    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id');
    }
    public function oltType()
    {
        return $this->belongsTo(OltType::class);
    }
    public function activationStatus()
    {
        return $this->belongsTo(ActivationStatus::class);
    }
}
