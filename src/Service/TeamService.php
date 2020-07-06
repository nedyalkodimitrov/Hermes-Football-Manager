<?php


namespace App\Service;


use App\Repository\MatchListRepository;
use App\Repository\PlayerProperties\WaterGlassesRepository;
use App\Repository\TeamRepository;
use App\Repository\YouthTeamRepository;

class TeamService
{

    private $teamRepo;
    public function __construct(TeamRepository $teamRepository)
    {

        $this->teamRepo = $teamRepository;


    }

    public function getTeams($division){
        $teams = $this->teamRepo->getTeamByDivisionDesc($division->getId());
        return $teams;
    }

    public function getTeamDivisionPosition($division){
        $teams = $this->teamRepo->getTeamByDivisionDesc($division->getId());
        return $teams;
    }


}