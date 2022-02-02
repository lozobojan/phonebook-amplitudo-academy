<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // eager loading
    protected $with = ["cities"];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
