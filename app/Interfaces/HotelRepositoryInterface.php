<?php

namespace App\Interfaces;

interface HotelRepositoryInterface {

    /**
     * Get Hotel By ID
     */
    public function getHotelByID(int $hotelID);

    /**
     * Get All Hotels
     */
    public function allHotels();

    /**
     * Create Hotel
     *
     * @param  string $name required Name of Hotel
     * @param array $arguments collection of data
     */
    public function createHotel(array $arguments);

    /**
     * Update The Hotel
     *
     * @param integer $hotelID required ID of Hotel
     * @param array $arguments collection of data
     */
    public function updateHotel(int $hotelID, array $arguments);

    /**
     * Remove the specified Hotel.
     *
     * @param  integer $hotelID
     */
    public function deleteHotel(int $hotelID);

    /**
     * Get Hotel that has same hotel name
     * 
     * @param string $hotelName
     */
    public function getHotelsByName(string $hotelName);

    /**
     * get 10 of Hotels that closest from the Location
     * @param float $latitude
     * @param float longitude
     */
    public function getClosetHotelByLocation(float $latitude, float $longitude);
}
