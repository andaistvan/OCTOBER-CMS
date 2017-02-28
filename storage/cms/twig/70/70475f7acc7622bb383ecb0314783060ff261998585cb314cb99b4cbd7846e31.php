<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/pages/movie-single.htm */
class __TwigTemplate_2604c62f5e641f4032158960c954a7a64a8a11370168316e436f2b73b762d68e extends Twig_Template
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

\t<div class=\"row\">
\t\t<div class=\"container\">

\t\t\t";
        // line 8
        $context["record"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "record", array());
        // line 9
        echo "\t\t\t";
        $context["displayColumn"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "displayColumn", array());
        // line 10
        echo "\t\t\t";
        $context["notFoundMessage"] = $this->getAttribute((isset($context["builderDetails"]) ? $context["builderDetails"] : null), "notFoundMessage", array());
        // line 11
        echo "\t\t\t<div class=\"card-panel blue-grey lighten-5\">
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t";
        // line 13
        if ((isset($context["record"]) ? $context["record"] : null)) {
            // line 14
            echo "\t\t\t\t\t   <h3><span class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "name", array()), "html", null, true);
            echo "</span></h3>
\t\t\t\t\t\t <span style=\"margin-left:0px;\" class=\"badge blue white-text left\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "year", array()), "html", null, true);
            echo "</span><br>
\t\t\t\t\t\t <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "poster", array()), "thumb", array(0 => 200, 1 => (isset($context["auto"]) ? $context["auto"] : null)), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t <h6 class=\"light\">Description</h6>
\t\t\t\t\t\t <p class=\"flow-text\">";
            // line 18
            echo $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "description", array());
            echo "</p>
\t\t\t\t\t\t<h3 class=\"light\">Image Gallery</h3>
\t\t\t\t\t\t<ul class=\"gallery clearfix\">
\t\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "movie_gallery", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t<li style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\" width=\"80px\" height=\"80px\" alt=\"\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<h3 class=\"light\">Genres</h3>
\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "genres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 30
                echo "\t\t\t\t\t\t\t<div class=\"chip\">
\t\t\t\t\t\t\t\t";
                // line 31
                echo $this->getAttribute($context["genre"], "genre_title", array());
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t    ";
            echo twig_escape_filter($this->env, (isset($context["notFoundMessage"]) ? $context["notFoundMessage"] : null), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

</section>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/pages/movie-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  106 => 36,  102 => 34,  93 => 31,  90 => 30,  86 => 29,  81 => 26,  72 => 23,  69 => 22,  65 => 21,  59 => 18,  54 => 16,  50 => 15,  45 => 14,  43 => 13,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  23 => 2,  19 => 1,);
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

\t<div class=\"row\">
\t\t<div class=\"container\">

\t\t\t{% set record = builderDetails.record %}
\t\t\t{% set displayColumn = builderDetails.displayColumn %}
\t\t\t{% set notFoundMessage = builderDetails.notFoundMessage %}
\t\t\t<div class=\"card-panel blue-grey lighten-5\">
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t{% if record %}
\t\t\t\t\t   <h3><span class=\"card-title\">{{ record.name }}</span></h3>
\t\t\t\t\t\t <span style=\"margin-left:0px;\" class=\"badge blue white-text left\">{{ record.year }}</span><br>
\t\t\t\t\t\t <img src=\"{{record.poster.thumb(200,auto)}}\">
\t\t\t\t\t\t <h6 class=\"light\">Description</h6>
\t\t\t\t\t\t <p class=\"flow-text\">{{ record.description|raw }}</p>
\t\t\t\t\t\t<h3 class=\"light\">Image Gallery</h3>
\t\t\t\t\t\t<ul class=\"gallery clearfix\">
\t\t\t\t\t\t\t{% for image in record.movie_gallery %}
\t\t\t\t\t\t\t\t<li style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{image.path}}\" width=\"80px\" height=\"80px\" alt=\"\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<h3 class=\"light\">Genres</h3>
\t\t\t\t\t\t{% for genre in record.genres %}
\t\t\t\t\t\t\t<div class=\"chip\">
\t\t\t\t\t\t\t\t{{genre.genre_title|raw }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% else %}
\t\t\t\t\t    {{ notFoundMessage }}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

</section>", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/pages/movie-single.htm", "");
    }
}
