<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OltType extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function olt()
    {
        return $this->hasOne(Olt::class);
    }
}
