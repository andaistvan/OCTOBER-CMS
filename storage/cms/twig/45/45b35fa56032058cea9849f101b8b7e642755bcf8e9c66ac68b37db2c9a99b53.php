<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/pages/movies.htm */
class __TwigTemplate_9caf3a3e3eb4a816d42f645aeea1ee3fbc972942050582a8a18742232e345f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("movies/page-head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<section id=\"movies-content\" class=\"section\">
\t
\t<div class=\"row\">
\t\t<div class=\"container\">
\t\t\t";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("builderList::mod"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "\t\t</div>
\t</div>
\t
</section>


<div class=\"row  blue-grey darken-4\">
\t<div class=\"container\">
\t\t<section id=\"typgraphy\" class=\"section\">
\t\t\t<h1 class=\"white-text light\">H1 heading</h1>
\t\t\t<h2 class=\"white-text light\">H2 heading</h2>
\t\t\t<h3 class=\"white-text light\">H3 heading</h3>
\t\t\t<h4 class=\"white-text light\">H4 heading</h4>
\t\t\t<h5 class=\"white-text light\">H5 heading</h5>
\t\t\t<h6 class=\"white-text light\">H6 heading</h6>
\t\t\t<p class=\"white-text light\">p paragraph</p>
\t\t</section>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/pages/movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'movies/page-head' %}

<section id=\"movies-content\" class=\"section\">
\t
\t<div class=\"row\">
\t\t<div class=\"container\">
\t\t\t{% partial 'builderList::mod' %}
\t\t</div>
\t</div>
\t
</section>


<div class=\"row  blue-grey darken-4\">
\t<div class=\"container\">
\t\t<section id=\"typgraphy\" class=\"section\">
\t\t\t<h1 class=\"white-text light\">H1 heading</h1>
\t\t\t<h2 class=\"white-text light\">H2 heading</h2>
\t\t\t<h3 class=\"white-text light\">H3 heading</h3>
\t\t\t<h4 class=\"white-text light\">H4 heading</h4>
\t\t\t<h5 class=\"white-text light\">H5 heading</h5>
\t\t\t<h6 class=\"white-text light\">H6 heading</h6>
\t\t\t<p class=\"white-text light\">p paragraph</p>
\t\t</section>
\t</div>
</div>", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/pages/movies.htm", "");
    }
}
