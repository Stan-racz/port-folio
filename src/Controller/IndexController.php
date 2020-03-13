<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig');
    }

    /**
     * @Route("/apropos", name="apropos")
     */
    public function aPropos(): Response
    {
        return $this->render('index/apropos.html.twig');
    }

    /**
     * @Route("/dev", name="dev")
     */
    public function developpement(): Response
    {
        return $this->render('index/developpement.html.twig');
    }

    /**
     * @Route("/comp", name="competences")
     */
    public function competences(): Response
    {
        return $this->render('index/competences.html.twig');
    }

    /**
     * @Route("/exp", name="exppro")
     */
    public function exppro(): Response
    {
        return $this->render('index/exppro.html.twig');
    }

    /**
     * @Route("/veille", name="veilletech")
     */
    public function veilletech(): Response
    {
        return $this->render('index/veilletech.html.twig');
    }

    /**
     * @Route("/palmares", name="palmares")
     */
    public function palmares(): Response
    {
        return $this->render('index/palmares.html.twig');
    }
}
