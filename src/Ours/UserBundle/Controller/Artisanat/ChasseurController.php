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
    public function arcAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chArc', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentArc.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentArc.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function arcGuerreAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chArcGu', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentArcGuerre.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentArcGuerre.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function arcLongAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chArcLo', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentArcLong.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentArcLong.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function lanceAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chLance', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentLance.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentLance.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function piqueAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chPique', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentPique.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentPique.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function hallebardeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chHallebarde', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentHallebarde.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentHallebarde.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonNaturelAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBatonNat', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonNaturel.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonNaturel.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function grandBatonNaturelAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chGrandBatonNat', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentGrandBatonNaturel.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentGrandBatonNaturel.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonSauvageAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBatonSau', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonSauvage.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonSauvage.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function dagueAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chDague', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentDague.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentDague.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function doubleDagueAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chDagueDouble', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentDoubleDague.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentDoubleDague.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function griffeAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chGriffe', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentGriffe.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentGriffe.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonLongAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBatonLong', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonLong.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonLong.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonSansFailleAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBatonSF', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonSansFaille.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonSansFaille.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function batonDoubleTranchantAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBatonDT', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonDoubleTranchant.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBatonDoubleTranchant.html.twig', array(
                'personages' => $personages
            ));
        }
    }

    /**
     * @param int $pages
     * @param bool $json
     * @return Response
     */
    public function torcheAction($pages = 0, $json = true)
    {
        $em = $this->getDoctrine()->getManager();
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chTorche', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentTorche.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentTorche.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chCasque1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentCasque1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentCasque1.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chCasque2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentCasque2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentCasque2.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chCasque3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentCasque3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentCasque3.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chArmure1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentArmure1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentArmure1.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chArmure2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentArmure2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentArmure2.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chArmure3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentArmure3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentArmure3.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBotte1', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBotte1.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBotte1.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBotte2', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBotte2.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBotte2.html.twig', array(
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
        $personages = $em->getRepository('OursUserBundle:Personage')->findCriteriaSorted('chBotte3', $pages * 10, 10);

        if ($json) {
            $lReturn = array();
            //use renderview instead of render, because renderview returns the rendered template
            $lReturn['html'] = $this->renderView('OursUserBundle:Personage:Artisanat\Chasseur\contentBotte3.html.twig', array(
                'personages' => $personages
            ));

            return new Response(json_encode($lReturn), 200, array('Content-Type' => 'application/json'));
        } else {
            return $this->render('OursUserBundle:Personage:Artisanat\Chasseur\contentBotte3.html.twig', array(
                'personages' => $personages
            ));
        }
    }
}