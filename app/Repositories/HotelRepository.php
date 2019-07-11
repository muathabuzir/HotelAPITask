<?php

namespace App\Repositories;

use App\Hotel;
use App\Interfaces\HotelRepositoryInterface;

class HotelRepository implements HotelRepositoryInterface {

    private $holel;

    public function __construct(Hotel $hotel) {
        $this->hotel = $hotel;
    }

    /**
     * Get's a hotel by it's ID
     *
     * @param int
     * @return Object
     */
    public function getHotelByID($hotelID) {
        return $this->hotel->find($hotelID);
    }

    /**
     * Get's all Hotels.
     *
     * @return mixed
     */
    public function allHotels() {
        return $this->hotel->all();
    }

    /**
     * Deletes a hotel.
     *
     * @param boolean
     */
    public function deleteHotel($hotelID) {
        return $this->hotel->destroy($hotelID);
    }

    /**
     * Update Hotel by Data
     * 
     * @param integer $hotelID
     * @param string $name
     * @param string $code
     * @param float $lat
     * @param float $long
     * @param string $description
     * @param string $termAndContditions
     * 
     * return boolean
     */
    public function updateHotel(int $hotelID, array $arguments) {
        if ($this->hotel->find($hotelID))
            return response()->success($this->hotel->where('id', $hotelID)->update($arguments));
        else
            return response()->error('Bad Request');
    }

    /**
     * Create New Hotel
     * 
     * @param array $arguments
     * return boolean
     */
    public function createHotel(array $arguments) {
        return $this->hotel->create($arguments);
    }

    /**
     * Get Hotel that has same hotel name
     * 
     * @param string $hotelName
     */
    public function getHotelsByName(string $hotelName) {
        return $this->hotel->where('name', 'like', '%' . str_replace(' ', '%', $hotelName) . '%')->get();
    }

    /**
     * get 10 of Hotels that closest from the Location limit 10
     * @param float $latitude
     * @param float $longitude
     */
    public function getClosetHotelByLocation(float $latitude, float $longitude) {
        $closetArea = config('hotel.nearbyArea');
        return $this->hotel
                        ->whereBetween('latitude', [$latitude - $closetArea, $latitude + $closetArea])
                        ->orWhereBetween('longitude', [$longitude - $closetArea, $longitude + $closetArea])
                        ->limit(config('hotel.limit'))
                        ->get();
    }

}
