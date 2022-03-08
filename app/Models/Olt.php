<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olt extends Model
{
    use HasFactory;
    protected $fillable=['username','password','model'];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
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
