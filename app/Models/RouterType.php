<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouterType extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function routers()
    {
        return $this->hasMany(Mikrotik::class);
    }
}
