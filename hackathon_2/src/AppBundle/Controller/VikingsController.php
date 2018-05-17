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

class VikingsController extends Controller
{
    /**
     * @Route("/vikings", name="vikings_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $vikings = $em->getRepository("AppBundle:Gladiator")->findByState(5);

        return $this->render('vikings/index.html.twig', array(
            'vikings' => $vikings,
        ));
    }
}