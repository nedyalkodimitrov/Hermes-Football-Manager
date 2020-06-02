<?php

namespace App\Service;

use App\Repository\MatchesRepository;
use App\Repository\MatchListRepository;
use App\Repository\MatchStatsRepository;
/**
 *
 */
class MatchService
{

  private $matchRepo;
  private $matchListRepo;
  private $matchStatsRepo
;
  function __construct(MatchListRepository $matchListRepo, MatchesRepository $matchRepo, MatchStatsRepository $matchStatsRepo)
  {
    $this->matchRepo = $matchRepo;
    $this->matchListRepo = $matchListRepo;
    $this->matchStatsRepo = $matchStatsRepo;
  }

  public function getMatchListRecodByMatchAndPlayer($playerId, $matchId){
    $matchListRecord = $this->matchListRepo->findBy(['match' => $matchId, "player" => $playerId]);
    return $matchListRecord[0];
  }

  public function checkIfTheTeamIsReadyWithMatchList($matchId, $teamId){
    $match = $this->matchRepo->find(intval($matchId));
    $matchListRecods = $match->getMatchList();

    if ( $matchListRecods == null) {
      return false;
    }else {
      for ($i=0; $i < count($matchListRecods) ; $i++) {
        if($matchListRecods[$i]->getPlayer()->getTeam()->getId() == $teamId){
          return true;
        }
      }
    }
    return false;
  }

  public function getMatchListRecods($matchId){
    $match = $this->matchRepo->find(intval($matchId));
    $matchListRecods = $match->getMatchList();
    return $matchListRecods;
  }

  public function getStartingPlayers($matchId, $teamId){
    $startingPlayers = [];

    $matchListRecords = $this->matchListRepo->findBy(["match" => $matchId]);
    $startingPlayersCount = 0;
    for ($i=0; $i < count($matchListRecords); $i++) {
      $matchListRecord = $matchListRecords[$i];
      if ($matchListRecord->getIsStarting() == true) {
        if ($matchListRecord->getMatch()->getHomeTeam()->getId() == $teamId ||$matchListRecord->getMatch()->getAwayTeam()->getId()) {
          $startingPlayers[$startingPlayersCount] = $matchListRecord->getPlayer()->getId();
          $startingPlayersCount++;
        }
      }
    }
    return $startingPlayers;
    
  }


}



?>
