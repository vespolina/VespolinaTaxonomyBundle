VespolinaTaxonomyBundle
======================

The VespolinaTaxonomyBundle is part of vespolina package.
It provides generic classifications for entities such as product, customers and so on for the vespolina project.

Examples of classifications include hierarchical classifications, 'tag' classifications, ...

## Rendering the sidebar

### Step 1: Import the bundle's routing ans setup a route you want the sidebar links to point to:
Import VespolinaTaxonomyBundle routing:
```yaml
# app/config/routing.yml
vespolina_taxanomy:
    resource: "@VespolinaTaxonomyBundle/Resources/config/routing.xml"
    prefix:   /vespolina/taxonomy

myCategory:
    path: /category/{categoryId}/{customSlug}
    defaults: { _controller: MyBundle:Category:show }
```

### Step 2: Render the sidebar in a template based on the above routing configuration
``` html+jinja
{% block content_sidebar %}
    {% render url('vespolina_taxonomy_list', {
        'routeName': myCategory,
        'taxonomyIdParam': categoryId,
        'customSlug': customSlugName
    }) %}
{% endblock content_sidebar %}
```
