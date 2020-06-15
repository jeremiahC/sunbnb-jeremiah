<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Spatie\Geocoder\Facades\Geocoder;

class MapsController extends Controller
{
    public function index()
    {
        $latestPlace = Place::latest()->first();
        return view('map', compact('latestPlace'));
    }

    public function store(Request $request)
    {
        $geocode = Geocoder::getCoordinatesForAddress($request->address);

        Place::create([
            'address' => $request->address,
            'lat' => $geocode['lat'],
            'long' => $geocode['lng']
        ]);

        return back();
    }
}
