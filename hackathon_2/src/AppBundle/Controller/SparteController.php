<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 17/05/18
 * Time: 16:27
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class SparteController extends Controller
{
    /**
     * @Route("/spartes", name="spartes_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $spartes = $em->getRepository("AppBundle:Gladiator")->findByState(4);

        return $this->render('spartes/index.html.twig', array(
            'spartes' => $spartes,
        ));
    }
}