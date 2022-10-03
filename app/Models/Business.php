<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Business extends Model
{
    use HasFactory;

    public function owners()
    {
        return $this->hasMany(Owner::class);
    }

    public static function getBusinessById($id)
    {
        return Business::where('businesses.id', $id)
            ->join('countries', 'businesses.country_id', '=', 'countries.id')
            ->select('businesses.*', 'countries.name AS country')
            ->first();
    }

    public static function getBusinesses()
    {
        $q = Business::query();

        if (request()->has('country')) {
            $q = $q->where(function ($query) {
               foreach (request()->get('country') as $country) {
                   $query->orWhere('businesses.country_id', $country);
               }
            });
        }

        if (request()->has('search')) {
            $q = $q->where('businesses.name', 'LIKE', '%'.request()->get('search').'%');
        }

        $q = $q->join('countries', 'businesses.country_id', '=', 'countries.id');
        $q = $q->select('businesses.*', 'countries.name AS country');

        return $q->get();
    }

    protected function city(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => explode(',', $attributes['address'])[1],
        );
    }

    protected function street(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => explode(',', $attributes['address'])[0],
        );
    }
}
