<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Players;
use AppBundle\Entity\Teams;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\registroType;
use AppBundle\Form\loginType;
use AppBundle\Entity\User;
use AppBundle\Entity\Stats;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Controller\ClearTextController;
use AppBundle\Twig\Extension\FileExtension;
use AppBundle\Form\searchType;
use AppBundle\Form\StatsType;
use AppBundle\Form\TeamsType;
use AppBundle\Form\PlayersType;

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
        $repository = $this->getDoctrine()->getRepository(Players::class);

        $jugadores = $repository->findAll();

        foreach ($jugadores as $jugador) {
            $jugador->setName(ClearTextController::clearText($jugador->getName()));
            $jugador->setLastname(ClearTextController::clearText($jugador->getLastname()));
        }

        return $this->render('media.html.twig', array('players' => $jugadores));
    }

    /**
     * @Route("/news", name="news")
     */
    public function showNews(Request $request)
    {
        return $this->render('news.html.twig');
    }

    /**
     * @Route("/stats", name="stats")
     */
    public function showStats(Request $request)
    {
        $statsRepository = $this->getDoctrine()->getRepository(Stats::class);
        $stats = $statsRepository->findAll();
        $teamsRepository = $this->getDoctrine()->getRepository(Teams::class);
        $teams = $teamsRepository->findAll();

        $form = $this->createForm(searchType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form->getData();
            return $this->redirectToRoute('stats_player', [
                'name' => $name['Nombre']
            ]);
        }
        return $this->render('stats.html.twig', array(
            'stats' => $stats,
            'teams' => $teams,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/stats/{name}", name="stats_player")
     */
    public function showStatsPlayer(Request $request, $name)
    {

        $teamsRepository = $this->getDoctrine()->getRepository(Teams::class);
        $teams = $teamsRepository->findAll();
        $playersRepository = $this->getDoctrine()->getRepository(Players::class);
        $player= $playersRepository->findByName($name);
        $repository = $this->getDoctrine()->getRepository(Stats::class);
        $stats = $repository->findByPlayer($player);

        $form = $this->createForm(searchType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form->getData();
            return $this->redirectToRoute('stats_player', [
                'name' => $name['Nombre']
            ]);
        }
        return $this->render('stats_per_player.html.twig', [
            'stats' => $stats,
            'teams' => $teams,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $usuario = new User();
        $form = $this->createForm(registroType::class, $usuario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);
            $usuario = $form->getData();
            $role = $usuario->getRole();
            $usuario->setRole($role);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();
            return $this->redirectToRoute('index');

        }

        $stats = $this->createForm(StatsType::class);
//        if ($stats>isSubmitted() && $stats->isValid()) {
//            $insert = $stats->getData();
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($insert);
//            $entityManager->flush();
//            return $this->redirectToRoute('index');
//        }

        $team = $this->createForm(TeamsType::class);
//        if ($team>isSubmitted() && $team->isValid()) {
//            $insert = $team->getData();
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($insert);
//            $entityManager->flush();
//            return $this->redirectToRoute('index');
//
//        }


        $player = $this->createForm(PlayersType::class);
//        if ($player>isSubmitted() && $player->isValid()) {
//            $insert = $player->getData();
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($insert);
//            $entityManager->flush();
//            return $this->redirectToRoute('index');
//
//        }

        return $this->render('register.html.twig', array(
            'form' => $form->createView(),
            'stats' => $stats->createView(),
            'teams' => $team->createView(),
            'player' => $player->createView()
        ));
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
            'error' => $error,
        ]);
    }

    /**
     * @Route("/roster", name="roster")
     */
    public function showRoster(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Players::class);

        $jugadores = $repository->findAll();

        $players = [];

        foreach ($jugadores as $jugador) {
            $jugador->setName(ClearTextController::clearText($jugador->getName()));
            $jugador->setLastname(ClearTextController::clearText($jugador->getLastname()));
        }

        return $this->render('roster.html.twig', array('players' => $jugadores));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {
        // UNREACHABLE CODE
    }
}
