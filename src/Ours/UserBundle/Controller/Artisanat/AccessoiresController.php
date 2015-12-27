<?php

namespace Ours\UserBundle\Controller\Artisanat;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AccessoiresController extends Controller
{
    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function sacAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('accSac', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Accessoire\contentSac.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Accessoire\contentSac.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function capeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('accCape', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Accessoire\contentCape.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Accessoire\contentCape.html.twig', array(
                'personages' => $personages
            ));
        }
    }
}