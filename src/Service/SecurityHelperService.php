<?php


namespace App\Service;


use App\Repository\CityRepository;

class SecurityHelperService
{


    public function getCitiesByCountry( $country, CityRepository $cityRepository){

        $cities = $cityRepository->findBy(["country" => 1]);
        return $cities;
    }


}