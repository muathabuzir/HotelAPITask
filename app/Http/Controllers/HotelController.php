<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HotelFormRequest;
use App\Http\Requests\HotelsFormRequest;
use App\Http\Requests\HotelIDRequest;
use App\Interfaces\HotelRepositoryInterface;
use App\Hotel;

class HotelController extends Controller {

    protected $hotelRepository;

    public function __construct(HotelRepositoryInterface $hotelRepository) {

        $this->hotelRepository = $hotelRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return $this->hotelRepository->allHotels();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelFormRequest $request) {
        return $this->hotelRepository->createHotel($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(int $hotelID) {
        if($hotelData = $this->hotelRepository->getHotelByID($hotelID))
                return response ()->success($hotelData);
        return response()->error('No Content', 204);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(HotelFormRequest $request, int $hotelID) {
        return $this->hotelRepository->updateHotel($hotelID, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $hotelId) {
        return $this->hotelRepository->deleteHotel($hotelId);
    }

    public function getHotels(HotelsFormRequest $request) {
        if (isset($request->name))
            return $this->hotelRepository->getHotelsByName($request->name);
        elseif (isset($request->latitude) && isset($request->longitude))
            return $this->hotelRepository->getClosetHotelByLocation($request->latitude, $request->longitude);
    }

}
