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

class PsgController extends Controller
{
    /**
     * @Route("/psg", name="psg_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $psg = $em->getRepository("AppBundle:Gladiator")->findByState(7);

        return $this->render('psg/index.html.twig', array(
            'psg' => $psg,
        ));
    }
}