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

class OmsController extends Controller
{
    /**
     * @Route("/oms", name="oms_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $oms = $em->getRepository("AppBundle:Gladiator")->findByState(8);

        return $this->render('oms/index.html.twig', array(
            'oms' => $oms,
        ));
    }
}