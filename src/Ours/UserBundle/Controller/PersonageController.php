<?php

namespace Ours\UserBundle\Controller;

use Ours\UserBundle\Entity\Personage;
use Ours\UserBundle\Form\PersonageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonageController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_OURS')) {
            throw $this->createAccessDeniedException();
        }

        $personage = new Personage();
        $form = $this->createForm(new PersonageType(), $personage, array(
            'action' => $this->generateUrl('add_personage'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $user = $this->get('security.context')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();

            $personage->setUser($user);
            $em->persist($personage);
            $em->flush();
            return $this->redirect($this->generateUrl('fos_user_profile_show'));
        }
        return $this->render('OursUserBundle:Personage:new.html.twig', array(
            'form'   => $form->createView(),
        ));
    }

    /**
     * @param Personage $personage
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Personage $personage)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_OURS') && $personage->getUser() != $user) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('OursUserBundle:Personage:show.html.twig', array(
            'personage' => $personage
        ));
    }

    /**
     * @param Request $request
     * @param Personage $personage
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Personage $personage)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if ($personage->getUser() != $user) {
            throw $this->createAccessDeniedException('Vous n\'avez pas le droit de modifier ce personnage!');
        }

        $form = $this->createForm(new PersonageType(), $personage, array(
            'action' => $this->generateUrl('edit_personage', array('personage' => $personage->getId())),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Modifier'));
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personage);
            $em->flush();
            return $this->redirect($this->generateUrl('fos_user_profile_show'));
        }
        return $this->render('OursUserBundle:Personage:edit.html.twig', array(
            'personage' => $personage,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @return Response
     */
    public function showAgricultureAction()
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findAll();

        return $this->render('OursUserBundle:Personage:showAgriculture.html.twig', array(
            'personages' => $personages
        ));
    }

    /**
     * @return Response
     */
    public function showArtisanatAction()
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findAll();

        return $this->render('OursUserBundle:Personage:showArtisanat.html.twig', array(
            'personages' => $personages
        ));
    }
}