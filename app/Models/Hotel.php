<?php

namespace App\Models;

class Hotel
{
    private $name;
    private $latitude;
    private $longitude;
    private $price;

    /**
     * @param $name
     * @param $latitude
     * @param $longitude
     * @param $price
     */
    public function __construct($name, $latitude, $longitude, $price)
    {
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


}
