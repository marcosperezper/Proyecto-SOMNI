<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RouteController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function showIndex(Request $request)
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/lineup", name="lineup")
     */
    public function showLineup(Request $request)
    {
        return $this->render('lineup.html.twig');
    }

    /**
     * @Route("/media", name="media")
     */
    public function showMedia(Request $request)
    {
        return $this->render('media.html.twig');
    }

    /**
     * @Route("/news", name="news")
     */
    public function showNews(Request $request)
    {
        return $this->render('news.html.twig');
    }

    /**
     * @Route("/roster", name="roster")
     */
    public function showRoster(Request $request)
    {
        return $this->render('roster.html.twig');
    }

    /**
     * @Route("/stats", name="stats")
     */
    public function showStats(Request $request)
    {
        return $this->render('stats.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function showRegister(Request $request)
    {
        return $this->render('register.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function showLogin(Request $request)
    {
        return $this->render('login.html.twig');
    }
}