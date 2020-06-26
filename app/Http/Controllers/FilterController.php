<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(Request $request)
    {
        dump($request->all());
        $roomType = $request->roomType;

        if ($request->all() > 0) {
            $listings = Listing::whereBetween('price', [$request->min_price, $request->max_price])
                ->where(function ($query) use ($roomType) {
                    foreach($roomType as $room) {
                        $query->orWhere('room_type', $room);
                    }
                })
                ->get();
        } else {
            $listings = Listing::all();
        }

        return view('filter.index', compact('listings'));
    }

    // public function filter(Request $request)
    // {
    //     // Max and Min Price
    //     $max = $
    //     // Room Type
    //     // Accomodation
    //     // Bedroom
    //     // Bathroom
    //     // Ammenities
    // }
}
