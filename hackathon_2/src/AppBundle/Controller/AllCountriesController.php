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

class AllCountriesController extends Controller
{
    /**
     * @Route("/allcountries", name="allcountries_index")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $countries = $em->getRepository("AppBundle:Country")->findAll();

        return $this->render('allcountries/index.html.twig', array(
            'countries' => $countries,
        ));
    }
}