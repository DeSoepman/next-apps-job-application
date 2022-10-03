<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public static function getWithBusinesses()
    {
        return Country::has('businesses')->get();
    }

}
