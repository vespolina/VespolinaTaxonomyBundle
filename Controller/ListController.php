<?php

namespace Vespolina\TaxonomyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vespolina\Entity\Taxonomy\TaxonomyNodeInterface;

class ListController extends Controller
{

    public function listAction($taxonomyNodes, $routeName, $taxonomyIdParam = 'id', array $routeParams = null)
    {
        $routes = array();
        foreach ($taxonomyNodes as $taxonomyNode) {
            $routes[] = $this->createRoute($taxonomyNode, $routeName, $taxonomyIdParam, $routeParams);
        }

        return $this->renderView('VespolinaTaxonomyBundle:Render:renderTaxonomyNodes.html.twig', array(
            'taxonomyNodes' => $taxonomyNodes,
            'routes' => $routes
        ));
    }

    protected function createRoute(TaxonomyNodeInterface $taxonomyNode, $routeName, $taxonomyIdParam, array $routeParams)
    {
        return $this->generateUrl($routeName, array_merge($routeParams, array(
            $taxonomyIdParam => $taxonomyNode->getId()
        )));
    }
}
