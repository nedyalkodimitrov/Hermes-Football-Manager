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
    $matchListRecord = $this->matchList->findBy(['match' => $matchId, "player" => $playerId]);
    return $matchListRecord;
  }
}


?>
