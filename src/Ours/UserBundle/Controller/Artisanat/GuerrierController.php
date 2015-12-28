<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 28/12/2015
 * Time: 12:01
 */

namespace Ours\UserBundle\Controller\Artisanat;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GuerrierController extends Controller
{
    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function epeeLargeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soEpeeLarge', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentEpeeLarge.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentEpeeLarge.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function claymoreAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soClaymore', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentClaymore.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentClaymore.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function glaiveAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soGlaive', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentGlaive.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentGlaive.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function hacheAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soHache', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentHache.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentHache.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandeHacheAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soGrandeHache', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentGrandeHache.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentGrandeHache.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function fauxAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soFaux', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentFaux.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentFaux.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function massueAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soMassue', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentMassue.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentMassue.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function massueLourdeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soMassueLo', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentMassueLourde.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentMassueLourde.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function fleauAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soFleau', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentFleau.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentFleau.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function masseAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soMasse', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentMasse.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentMasse.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function becDeCorbinAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soBecDeCorbin', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentBecDeCorbin.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentBecDeCorbin.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandeMasseAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soGrandeMasse', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentGrandeMasse.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentGrandeMasse.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function arbaleteAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soArbalete', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentArbalete.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentArbalete.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function arbaleteLourdeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soArbaleteLo', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentArbaleteLourde.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentArbaleteLourde.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function arbaleteRepetitionAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soArbaleteRep', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentArbaleteReptition.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentArbaleteRepetition.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function bouclierAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soBouclier', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentBouclier.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentBouclier.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function casque1Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soCasque1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentCasque1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentCasque1.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function casque2Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soCasque2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentCasque2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentCasque2.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function casque3Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soCasque3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentCasque3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentCasque3.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function armure1Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soArmure1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentArmure1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentArmure1.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function armure2Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soArmure2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentArmure2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentArmure2.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function armure3Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soArmure3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentArmure3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentArmure3.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function botte1Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soBotte1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentBotte1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentBotte1.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function botte2Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soBotte2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentBotte2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentBotte2.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function botte3Action($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('soBotte3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Guerrier\contentBotte3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Guerrier\contentBotte3.html.twig', array(
                'personages' => $personages
            ));
        }
    }
}