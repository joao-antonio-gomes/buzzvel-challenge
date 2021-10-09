<?php

namespace App\Http\Controllers;

use App\Models\HotelsList;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function getNearbyHotels(Request $request) {
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');

        $hotels = (new HotelsList())->getAllHotels();

//        var_dump($hotels);

        return view('pages.hotels_list', compact('hotels'));
    }
}
