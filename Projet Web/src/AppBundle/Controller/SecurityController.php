<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends Controller
{
    /**
     * @Route("/login2", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();



        $lastUsername = $request->get('_username');
        $password = $request->get('_password');
        if ($lastUsername != null && $password != null) {
            $session = $request->getSession();
            $session->set('username',$lastUsername);
        }

        if ($request->isMethod('POST')){
            $this->addFlash(
                'notice',
                'Vos modifications ont été enregistrées !'
            );
        }



        return $this->render('login.html.twig', array(
            'title' => 'Connection',
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
}