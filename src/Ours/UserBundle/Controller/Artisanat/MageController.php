<?php

namespace Ours\UserBundle\Controller\Artisanat;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MageController extends Controller
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

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandBatonFeuAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maGrandBatonFeu', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonFeu.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonFeu.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonInfernalAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonInfernal', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonInfernal.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonInfernal.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonBeniAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonBeni', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonBeni.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonBeni.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandBatonBeniAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maGrandBatonBeni', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonBeni.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonBeni.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonDivinAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonDivin', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonDivin.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonDivin.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonEsoteriqueAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonEso', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonEsoterique.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonEsoterique.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandBatonEsoteriqueAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maGrandBatonEso', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonEsoterique.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonEsoterique.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonEnigmatiqueAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonEni', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonEnigmatique.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonEnigmatique.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonGivreAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonGi', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonGivre.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonGivre.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandBatonGivreAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maGrandBatonGi', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonGivre.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonGivre.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonGlacialAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonGla', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonGlacial.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonGlacial.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonDamneAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonDamn', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonDamne.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonDamne.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandBatonDamneAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maGrandBatonDamn', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonDamne.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentGrandBatonDamne.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonDemoAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBatonDemo', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBatonDemoniste.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBatonDemoniste.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function tomeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maTome', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentTome.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentTome.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maCasque1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentCasque1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentCasque1.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maCasque2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentCasque2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentCasque2.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maCasque3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentCasque3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentCasque3.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maArmure1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentArmure1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentArmure1.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maArmure2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentArmure2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentArmure2.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maArmure3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentArmure3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentArmure3.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBotte1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBotte1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBotte1.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBotte2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBotte2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBotte2.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('maBotte3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Mage\contentBotte3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Mage\contentBotte3.html.twig', array(
                'personages' => $personages
            ));
        }
    }
}