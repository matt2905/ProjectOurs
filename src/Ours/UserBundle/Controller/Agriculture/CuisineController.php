<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 28/12/2015
 * Time: 13:23
 */

namespace Ours\UserBundle\Controller\Agriculture;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CuisineController extends Controller
{
    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function soupeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('cuSoup', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Agriculture\Cuisine\contentSoupe.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Agriculture\Cuisine\contentSoupe.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function saladeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('cuSalad', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Agriculture\Cuisine\contentSalade.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Agriculture\Cuisine\contentSalade.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function omeletteAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('cuOmelette', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Agriculture\Cuisine\contentOmelette.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Agriculture\Cuisine\contentOmelette.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function tourteAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('cuPie', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Agriculture\Cuisine\contentTourte.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Agriculture\Cuisine\contentTourte.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function ragoutAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('cuStew', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Agriculture\Cuisine\contentRagout.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Agriculture\Cuisine\contentRagout.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function sandwichAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('cuSandwich', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Agriculture\Cuisine\contentSandwich.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Agriculture\Cuisine\contentSandwich.html.twig', array(
                'personages' => $personages
            ));
        }
    }
}