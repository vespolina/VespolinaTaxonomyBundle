<?php

namespace Vespolina\TaxonomyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ListController extends Controller
{
    /**
     * Create a list of TaxonomyNodes
     *
     * @param string $routeName The name of the route each link should link to
     * @param string $taxonomyIdParam The name of the parameter that identifies a unique taxonomy node in the route.
     * @param Request $request
     * @return Response
     */
    public function listAction($routeName, $taxonomyIdParam = 'id', Request $request)
    {
        $taxonomyManager = $this->get('vespolina.taxonomy_manager');
        $taxonomyNodes = $taxonomyManager->findAll();
        $routes = array();
        foreach ($taxonomyNodes as $key => $taxonomyNode) {
            $routes[$key] = $this->generateUrl($routeName, array_merge($request->query->all(), array(
                $taxonomyIdParam => $taxonomyNode->getId()
            )));
        }

        return $this->render('VespolinaTaxonomyBundle:List:list.html.twig', array(
            'taxonomyNodes' => $taxonomyNodes,
            'routes' => $routes
        ));
    }
}
