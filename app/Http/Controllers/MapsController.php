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
        $city = '';
        foreach ($geocode['address_components'] as $key => $components) {
            // // If city key is found
            if (in_array("locality", $components->types)) {
                $city = $components->long_name;
                break;
            }
        }

        Place::create([
            'address' => $request->address,
            'city' => $city,
            'lat' => $geocode['lat'],
            'long' => $geocode['lng']
        ]);

        return back();
    }
}
