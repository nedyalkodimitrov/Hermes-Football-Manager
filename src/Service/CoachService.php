<?php


namespace App\Service;


use App\Entity\Coach;
use App\Entity\Team;
use App\Entity\YouthTeam;
use App\Repository\PlayerRepository;

class CoachService
{
    const HeadCoach = 'HEAD_COACH';

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


    public function getHeadCoachOfYouthTeam(YouthTeam $youthTeam){
        $coaches = $youthTeam->getCoaches();

        foreach ($coaches as $coach){
            if ($coach->getTeamPosition() == "HEAD_COACH"){
                return $coach;
            }

        }
        return null;
    }

    public function getHeadCoachOfTeam(Team $team){
        $coaches = $team->getCoaches();

        foreach ($coaches as $coach){
            if ($this->isHeadCoach($coach)){
                return $coach;
            }
            echo $coach->getBirthDay();
        }

        return null;

    }


    public function isHeadCoach(Coach $coach ){
        if ($coach->getTeamPosition()->getName() != self::HeadCoach){
            return false;
        }
        return true;
    }

    public function getRequestFromPlayers(Coach $coach){
        $requestFromPlayers = [];
        $user = $coach->getUser();
        $allRequestToCoach = $user->getRequestFromUser();
        for ($i = 0; $i < count($allRequestToCoach), $i++;){
//            if ($allRequestToCoach[$i]->getType() == "player-coach"){
                array_push($requestFromPlayers, $allRequestToCoach[$i]);
//            }
        }
        return $requestFromPlayers;

    }


}