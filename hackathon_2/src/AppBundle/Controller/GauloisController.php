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

class GauloisController extends Controller
{
    /**
     * @Route("/gaulois", name="gaulois_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $gaulois = $em->getRepository("AppBundle:Gladiator")->findByState(1);

        return $this->render('gaulois/index.html.twig', array(
            'gaulois' => $gaulois,
        ));
    }
}