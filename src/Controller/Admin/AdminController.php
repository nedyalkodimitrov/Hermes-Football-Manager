<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Entity\Coach;
use App\Entity\CoachPosition;
use App\Entity\Division;
use App\Entity\Player;
use App\Entity\Requests\CoachToPlayerRequest;
use App\Entity\Team;
use App\Entity\User;
use App\Entity\YouthDivision;
use App\Entity\YouthTeam;
use App\Form\CoachType;
use App\Form\PlayerType;
use App\Form\UserType;
use App\Repository\CoachRepository;
use App\Repository\MatchesRepository;
use App\Repository\PlayerRepository;
use App\Repository\Requests\UserToUserRequestRepository;
use App\Repository\ScheduleRepository;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use App\Repository\YouthTeamRepository;
use App\Service\CoachService;
use App\Service\MatchService;
use App\Service\PlayerService;
use App\Service\TeamService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{



    /**
     * @Route("/admin/schedule" , name = "allSchedule")
     */
    public function Schedule(Request $request, ScheduleRepository $scheduleRepository){
        $team = $this->getUser()->getAdmin()->getTeam();
        $menTeamSchedule = $this->getHeadCoachOfTeam($team)->getSchedule();
    }





        private function CheckPhoneNumber($phone){
        $playerPhoneNumber = $this->getDoctrine()->getRepository(Player::class)->findBy(array('phone' => $phone));
        $coachPhoneNumber = $this->getDoctrine()->getRepository(Coach::class)->findBy(array('phone' => $phone));
        $adminPhoneNumber = $this->getDoctrine()->getRepository(Admin::class)->findBy(array('phone' => $phone));

        if (count($playerPhoneNumber) > 0 || count($coachPhoneNumber) > 0 || count($adminPhoneNumber) > 0  ){
            return true;
        }
        return false;

    }

    private  function GetPropFromRequest($prop, Request $request){
        return json_decode($request->request->get($prop));
    }

    protected function getHeadCoachOfTeam(Team $team){
        $coaches = $team->getCoaches();

        foreach ($coaches as $coach){
            if ($coach->getTeamPosition() == "HEAD_COACH"){
                return $coach;
            }

        }
        return null;

    }

   private function getHeadCoachOfYouthTeam(YouthTeam $youthTeam){
        $coaches = $youthTeam->getCoaches();

        foreach ($coaches as $coach){
            if ($coach->getTeamPosition() == "HEAD_COACH"){
                return $coach;
            }

        }
        return null;
    }


}
