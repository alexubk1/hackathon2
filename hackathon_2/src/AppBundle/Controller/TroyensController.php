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

class TroyensController extends Controller
{
    /**
     * @Route("/troyens", name="troyens_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $troyens = $em->getRepository("AppBundle:Gladiator")->findByState(2);

        return $this->render('troyens/index.html.twig', array(
            'troyens' => $troyens,
        ));
    }
}