<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mikrotik extends Model
{
    use HasFactory;
    protected $fillable=['user_name','password','ssh_port','api_port','ip_address'];

    public function routerType()
    {
        return $this->belongsTo(RouterType::class);
    }
    public function mikrotikStatus()
    {
        return $this->belongsTo(ActivationStatus::class);
    }
}
