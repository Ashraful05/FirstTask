<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivationStatus extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public static $NEW = 1;
    public static $ACTIVE = 2;
    public static $INACTIVE = 3;


    public function mikrotiks()
    {
        return $this->hasMany(Mikrotik::class,'activation_status_id');
    }
    public function olts()
    {
        return $this->hasMany(Olt::class,'olt_type_id');
    }
}
