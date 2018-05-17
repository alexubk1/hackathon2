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

class PersesController extends Controller
{
    /**
     * @Route("/perses", name="perses_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $perses = $em->getRepository("AppBundle:Gladiator")->findByState(3);

        return $this->render('perses/index.html.twig', array(
            'perses' => $perses,
        ));
    }
}