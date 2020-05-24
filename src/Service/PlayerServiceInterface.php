<?php


namespace App\Service;


use App\Repository\PlayerProperties\WaterGlassesRepository;

interface PlayerServiceInterface
{

    public function LastWaterRecord($user, $userId);

    public function getTeam($player);

}