<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivationStatus extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function statusMikrotik()
    {
        return $this->hasMany(Mikrotik::class);
    }
    public function statusOlt()
    {
        return $this->hasMany(Olt::class);
    }
}
