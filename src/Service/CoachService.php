<?php


namespace App\Service;


use App\Entity\Coach;
use App\Repository\PlayerRepository;

class CoachService
{
    public function getCoachTeam(Coach $coach){
        if($coach->getTeam() != null){
            $teamOfCoach = $coach->getTeam();
        }else    {
            $teamOfCoach = $coach->getYouthTeam();
        }
        return $teamOfCoach;
    }
    public function getTopPlayersFromCoachTeam(PlayerRepository $playerRepository, Coach $coach){
        if($coach->getTeam() != null){
            $topPlayers =  $playerRepository->getTopPlayers($coach->getTeam()->getId());
        }else    {
            $topPlayers =  $playerRepository->getTopYouthPlayersFromCurrentTeam($coach->getYouthTeam()->getId());

        }
        return $topPlayers;
    }

}