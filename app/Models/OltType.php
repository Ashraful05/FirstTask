<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OltType extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function olts()
    {
        return $this->hasMany(Olt::class);
    }
}
