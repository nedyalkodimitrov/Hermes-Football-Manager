<?php

namespace App\Controller\Coach;


use App\Service\CoachService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class CoachController extends AbstractController
{
    const PrefixRoutePath = "coach";
    const HeadCoach = 'HEAD_COACH';
    const requestType = "coach-player";
    protected $coachService;
    private $bCryptAlgorithmOption;
    public function __construct(CoachService $coachService)
    {
        $this->coachService = $coachService;
        $this->bCryptAlgorithmOption = [
            'cost' => 12,
        ];
    }





    private function binarySearch($l, $r, $x)
    {
        $arr[] = range(0, 1000000);
        while ($l <= $r)
        {
            $m = $l + ($r - $l) / 2;

            // Check if x is present at mid
            if (password_verify($x, $arr[$m] ))
                return floor($m);

            // If x greater, ignore
            // left half
            if ($arr[$m] < $x)
                $l = $m + 1;

            // If x is smaller,
            // ignore right half
            else
                $r = $m - 1;
        }

        // if we reach here, then
        // element was not present
        return -1;
    }

}
