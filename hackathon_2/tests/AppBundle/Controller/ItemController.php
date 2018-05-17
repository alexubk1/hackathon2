<?php
/**
 * Created by PhpStorm.
 * User: ths
 * Date: 17/05/2018
 * Time: 11:30
 */

namespace Tests\AppBundle\Controller;


class ItemController
{

    /**
     * Display view index
     *
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function indexAction()
    {
        $this->twig->getExtensions(session_start());
        $this->twig->addGlobal('session', $_SESSION);
        $this->twig->addGlobal('siteKey', APP_SITE_KEY_RECAPTCHA);
        $this->twig->getExtensions(session_unset());
        return $this->twig->render('/Item/index.html.twig');
    }

}