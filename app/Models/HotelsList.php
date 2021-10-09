<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class HotelsList
{
    private array $hotels;

    public function __construct()
    {
        $hotels = Http::get('https://buzzvel-interviews.s3.eu-west-1.amazonaws.com/hotels.json');
        $responseArray = json_decode($hotels, true);
        $hotelsArray = array_map(
            function ($hotel) {
                return new Hotel($hotel[0], $hotel[1], $hotel[2], $hotel[3]);
            } , $responseArray['message']);

        $this->hotels = $hotelsArray;
    }

    public function getAllHotels(): array
    {
        return $this->hotels;
    }

    public function getByLatitudeLongitude(): array
    {

    }
}
