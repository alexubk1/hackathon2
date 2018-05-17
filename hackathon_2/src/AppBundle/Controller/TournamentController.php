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
        return $this->render('tournament/index.html.twig', array(
            'countries' => $countries,
        ));
    }
}