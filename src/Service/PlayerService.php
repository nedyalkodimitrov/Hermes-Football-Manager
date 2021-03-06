<?php

namespace App\Service;


use App\Entity\Player;
use App\Repository\PlayerProperties\WaterGlassesRepository;
use App\Repository\TeamRepository;
use App\Repository\YouthTeamRepository;
use App\Repository\MatchListRepository;



class PlayerService implements PlayerServiceInterface
{

    private $waterGlassesRepo;
    private $teamRepo;
    private $youthTeam;
    private $matchList;
    public function __construct(MatchListRepository $matchListRepository, WaterGlassesRepository $waterGlassesRepository, TeamRepository $teamRepository, YouthTeamRepository $youthTeam)
    {
        $this->waterGlassesRepo = $waterGlassesRepository;
        $this->teamRepo = $teamRepository;
        $this->youthTeam = $youthTeam;
        $this->matchList = $matchListRepository;

    }

    public function LastWaterRecord($user, $userId){
        $currentDate = Date('Y-m-d');
        $today = date('Y-m-d', strtotime($currentDate));

        $water_glasses = $this->waterGlassesRepo->getWaterGlassesByUserDESC($userId);

        if ($water_glasses == null) {
            $waterTime = 0;
        }else {
            $waterTime = strtotime($water_glasses->getDate());
        }

        $waterDay = date('Y-m-d',$waterTime);
        if ($water_glasses == null || $waterDay < $today ){
            $this->waterGlassesRepo->setWaterGlass($user, $currentDate);
        }

        return  $this->waterGlassesRepo->getLastWaterGlass($userId);
    }

    //Get the team of the player
    public function getTeam($player){
        if($player->getTeam() != null){
            $team = $player->getTeam();
        }else {
            $team = $player->getYouthTeams();
        }
        return $team;
    }

    //Get teams by division
    public function getTeams($division, $youthTeam){
        if ($youthTeam == null)
        {
            $teams = $this->teamRepo->getTeamByDivisionDesc($division->getId());
        }else {

            $teams = $this->youthTeam->getTeamByDivisionDesc($division->getId());
        }

        return $teams;
    }



    public  function setInjured($player, $statuses, $status, $playersInjuredRepo){
        $checker1 = true;
        $checker2 = true;

        foreach ($statuses as $stat){
            if ($stat->getStartTreatment() >= $status->getStartTreatment()&& $status->getStartTreatment() <= $stat->getEndTreatment()){
                $checker1 = false;
            }
            if ($stat->getEndTreatment() >= $status->getEndTreatment()&& $status->getEndTreatment() <= $stat->getEndTreatment()){
                $checker2 = false;
            }
        }
        if ($checker1 == true && $checker2 == true) {
            $status->setUsers($player);
            $playersInjuredRepo->save($status);
            return 1;
        }else{
            return 2;
        }
    }
    //Get schedule for training
    public function getSchedule($coaches){
        $schedule = [];
        foreach ($coaches as $coach){
            if($coach->getTeamPosition()->getId() == 1){
                $headCoach = $coach;
                $schedule = $headCoach->getSchedule();
            }else{
                $headCoach = null;
            }
        }
        return $schedule;
    }

    public function getHeadCoache($coaches){
        foreach ($coaches as $coache){
            if($coache->getTeamPosition()->getId() == 1){
                $headCoache = $coache;
            }else{
                $headCoache = null;
            }
        }
        return $headCoache;
    }
    // Generate Name by time
    public function generateName($name){
        $time = date('h');

        if($time >7 && $time < 10){
            return "Добро утро, господин ".$name;
        }else if($time >= 10 && $time< 17){
            return "Добър ден, господин ".$name;
        }
        return "Добър вечер, господин ".$name;
    }

    //get player team
    public function getPlayerTeam(Player $player){
        if ($player->getYouthTeams() != null){
            $team = $player->getYouthTeams();
        }else{
            $team = $player->getTeam();
        }
        return $team;
    }

    public function getPlayerFromMatchList($playerId, $matchId){
      $matchListRecord = $this->matchList->findBy(['match' => $matchId, "player" => $playerId]);
      return $matchListRecord;
    }

    public function getPlayedMatches(Player $player){
        $matchListRecords = $player->getMatchList();

        $playedMatches = 0;
        for ($i=0; $i < count($matchListRecords); $i++) {
          if ($matchListRecords[$i]->getIsPlayed() == true || $matchListRecords[$i]->getIsStarting() == true) {
            $playedMatches++;
          }
        }

        return $playedMatches;
    }

    public function getTitularPlayedMatches(Player $player){
        $matchListRecords = $player->getMatchList();

        $playedMatches = 0;
        for ($i=0; $i < count($matchListRecords); $i++) {
          if ($matchListRecords[$i]->getIsStarting() == true) {
            $playedMatches++;
          }
        }

        return $playedMatches;
    }


    public function getGoals(Player $player) {
      $matchListRecords = $player->getMatchList();

      $goals = 0;
      for ($i=0; $i < count($matchListRecords); $i++) {
        $goals += $matchListRecords[$i]->getGoals();
      }

      return $goals;
    }

    public function getTotalPlayedMinutes(Player $player){
      $matchListRecords = $player->getMatchList();

      $playedMinutes = 0;
      for ($i=0; $i < count($matchListRecords); $i++) {
        $playedMinutes += ($matchListRecords[$i]->getEndTime() -  $matchListRecords[$i]->getStartTime());
      }
      return $playedMinutes;

    }


}
