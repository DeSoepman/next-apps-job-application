<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Http\Resources\BusinessResource;
use App\Http\Resources\BusinessCollection;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index($id)
    {
        return view('business.index', [
            'business' => $this->ApiGetBusinessById($id)
        ]);
    }

    public function ApiGetBusinessById($id): BusinessResource
    {
        return new BusinessResource(Business::getBusinessById($id));
    }

    public function ApiGetBusinesses(): BusinessCollection
    {
        return new BusinessCollection(Business::getBusinesses());
    }
}
