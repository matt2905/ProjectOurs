<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 27/12/2015
 * Time: 20:34
 */

namespace Ours\UserBundle\Controller\Artisanat;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ChasseurController extends Controller
{
    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonFeuAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonFeu', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonFeu.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonFeu.html.twig', array(
                'personages' => $personages
            ));
        }
    }
}