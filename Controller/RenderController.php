<?php

namespace Vespolina\TaxonomyBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vespolina\Entity\Taxonomy\TaxonomyNode;

class RenderController extends Controller
{

    public function renderTaxonomyNodesAction(array $taxonomyNodes, $routePattern = null)
    {
        foreach ($taxonomyNodes as $taxonomyNode) {
            /** @var $taxonomyNode TaxonomyNode */

        }

        return $this->renderView('VespolinaTaxonomyBundle:Render:renderTaxonomyNodes.html.twig', array(
            'taxonomyNodes' => $taxonomyNodes,

        ));
    }
}
