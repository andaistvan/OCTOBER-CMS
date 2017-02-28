<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/movies/page-head.htm */
class __TwigTemplate_02dc69178f8652f29fb9947ae3ec0a78fcde46cdf57ae5f38195c37c5321a701 extends Twig_Template
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
        echo "<section id=\"page-head\" class=\"fullwidth blue-grey\">
\t<div class=\"row section\">
\t\t
\t\t\t<h3 class=\"light center white-text\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo "</h3>
\t\t
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/movies/page-head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"page-head\" class=\"fullwidth blue-grey\">
\t<div class=\"row section\">
\t\t
\t\t\t<h3 class=\"light center white-text\">{{ this.page.id }}</h3>
\t\t
\t</div>
</section>", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/movies/page-head.htm", "");
    }
}
