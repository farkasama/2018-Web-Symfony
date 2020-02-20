<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use \Datetime;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Commentaire;

class SerieController extends Controller {

    /**
     * @Route("serie/{name}", name="show_serie")
     */
    public function show_serieAction($id, $name) {
        $request = Request::createFromGlobals();
        $user = $this->getUser();
        if ($request->getMethod() === 'POST') {
            $comment = $request->request->get('commentaire');

            $entityManager = $this->getDoctrine()->getManager();
            $commentaire = new Commentaire();
            $commentaire->setIdEnsemble($id);
            $commentaire->setIdUser($user->getId());
            $date = date_create_from_format('Y-m-d', date('Y-m-d'));
            $date->getTimestamp();
            $commentaire->setDate($date);
            $commentaire->setContenu($comment);

            $entityManager->persist($commentaire);
            $entityManager->flush();

            $repository = $this->getDoctrine()->getRepository('AppBundle:Serie');
            $serie = $repository->find($id);
            $nom = $serie->getName();
            $newDate = $serie->getDateSortie();
            $newDate = $newDate->format('d/m/Y');
            
            $repository2 = $this->getDoctrine()->getRepository('AppBundle:Commentaire');
            $commentaires = $repository2->findBy(array('idEnsemble' => $id));
            return $this->render('serie.html.twig', [
                'title' => "AlloSerie : " . $nom,
                'id' => $id,
                'nom' => $nom,
                'date' => $newDate,
                'resume' => $serie->getResume(),
                'commentaires' => $commentaires,
                'user' => true
            ]);
        }
        else {
            $repository = $this->getDoctrine()->getRepository('AppBundle:Serie');
            $serie = $repository->find($id);
            $nom = $serie->getName();
            $newDate = $serie->getDateSortie();
            $newDate = $newDate->format('d/m/Y');
            $repository2 = $this->getDoctrine()->getRepository('AppBundle:Commentaire');
            $commentaires = $repository2->findBy(array('idEnsemble' => $id));
            $booluser;
            if ($user == null)
                $booluser = false;
            else
                $booluser = true;
            return $this->render('serie.html.twig', [
                'title' => "AlloSerie : " . $nom,
                'id' => $id,
                'nom' => $nom,
                'date' => $newDate,
                'resume' => $serie->getResume(),
                'commentaires' => $commentaires,
                'user' => $booluser
            ]);
        }
    }
}