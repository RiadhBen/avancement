<?php

namespace Collab\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RegistrationEtudiantController extends Controller
{

    /**
     * @Route("/register/etudiant")
     * @Template()
     */
    public function registerAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Collab\UserBundle\Entity\Etudiant');
    }
}