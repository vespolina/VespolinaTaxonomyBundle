<?php

namespace Vespolina\TaxonomyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vespolina\Entity\Taxonomy\TaxonomyNode;

class ListController extends Controller
{

    public function listAction($taxonomyNodes, $routeName, array $routeParams = null)
    {
        foreach ($taxonomyNodes as $taxonomyNode) {
            /** @var $taxonomyNode TaxonomyNode */

        }

        return $this->renderView('VespolinaTaxonomyBundle:Render:renderTaxonomyNodes.html.twig', array(
            'taxonomyNodes' => $taxonomyNodes,

        ));
    }

    protected function createRoute()
    {

    }
}
