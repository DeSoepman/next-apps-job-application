<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Country;
use App\Models\Owner;
use Illuminate\Http\Request;
use App\Http\Resources\CountryCollection;
use App\Http\Controllers\Business\BusinessController;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index', [
            'countries'     => $this->ApiGetCountries(),
            'businesses'    => (new BusinessController())->ApiGetBusinesses()
        ]);
    }

    public function ApiGetCountries(): CountryCollection
    {
        return new CountryCollection(Country::getWithBusinesses());
    }
}
