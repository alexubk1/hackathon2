<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class TournamentController extends Controller
{
    /**
     * @Route("/tournament", name="tournament")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $countries = $em->getRepository("AppBundle:Country")->findAll();
        shuffle($countries);
      
        $sort= array();
        $j=0;
        for ($i=0; $i<=count($countries); $i++) {
            if ($i % 2 == 0 && $i != 0 ) {
                $sort[$j] = $countries[rand($i - 1 , $i -2)];
                $j++;
            }
        }

        $final=array();
        $k=0;
        for ($i=0; $i<=count($sort); $i++) {
            if ($i % 2 == 0 && $i != 0 ) {
                $final[$k] = $sort[rand($i - 1 , $i -2)];
                $k++;
            }
        }

        $victory=array();
        $l=0;
        for ($i=0; $i<=count($sort); $i++) {
            if ($i % 2 != 0 && $i != 0 ) {
                $victory[$l] = $final[rand(0, 1)];
                $l;
            }
        }

        return $this->render('tournament/index.html.twig', array(
            'countries' => $countries,
            'sort' => $sort,
            'final' => $final,
            'victory' => $victory,

        ));
    }
}