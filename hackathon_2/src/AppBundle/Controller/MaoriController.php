<?php
/**
 * Created by PhpStorm.
 * User: ths
 * Date: 17/05/2018
 * Time: 22:34
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class MaoriController extends Controller
{
    /**
     * @Route("/maori", name="maori_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $maori = $em->getRepository("AppBundle:Gladiator")->findByState(6);

        return $this->render('maori/index.html.twig', array(
            'maori' => $maori,
        ));
    }
}