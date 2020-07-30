<?php

namespace App\Controller\Player;

use App\Entity\Requests\CoachToPlayerRequest;
use App\Entity\Requests\PlayerToTeamRequest;
use App\Repository\PlayerProperties\WaterGlassesRepository;
use App\Service\PlayerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class PlayerController extends AbstractController
{
    protected $playerPropService;
    protected $waterGlassRepo;

    public function __construct(PlayerService $playerProperties, WaterGlassesRepository $waterGlassesRepository)
    {
        $this->playerPropService = $playerProperties;
        $this->waterGlassRepo = $waterGlassesRepository;

    }





}
