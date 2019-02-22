<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\registroType;
use AppBundle\Form\loginType;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


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
    public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $usuario=new User();
        $form=$this->createForm(registroType::class,$usuario);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);
            $usuario = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();
            return $this->redirectToRoute('index');

        }
        return $this->render('register.html.twig', array('form'=> $form->createView()));
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
}