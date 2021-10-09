<?php

namespace App\Http\Controllers;

use App\Models\HotelsList;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function getNearbyHotels(Request $request)
    {
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');
        $hotels = (new HotelsList())->getByLatitudeLongitudePrice($latitude, $longitude);

        foreach ($hotels as $hotel) {
            $hotel->setDistance($this->distance($latitude, $longitude, $hotel->getLatitude(), $hotel->getLongitude()));
        }

        $order = $request->get('order');
        if ($order == 'price') {
            usort($hotels, function ($first, $second) {
                return $first->getPrice() > $second->getPrice() ? 1 : -1;
            });
        } else {
            usort($hotels, function ($first, $second) {
                return strcmp($first->getDistance(), $second->getDistance());
            });
        }

        return view('pages.hotels_list', compact('hotels'));
    }

    public function distance($lat1, $lon1, $lat2, $lon2)
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $km = number_format(($miles * 1.609344), 0, ',', '.');
        return $km;
    }
}
