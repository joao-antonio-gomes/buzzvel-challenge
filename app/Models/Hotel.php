<?php

namespace App\Models;

class Hotel
{
    private $name;
    private $latitude;
    private $longitude;
    private $price;
    private $distance;

    public function __construct($name, $latitude, $longitude, $price)
    {
        $this->name = $name;
        $this->latitude = floatval($latitude);
        $this->longitude = floatval($longitude);
        $this->price = floatval($price);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function setDistance($distance): void
    {
        $this->distance = $distance;
    }
}
