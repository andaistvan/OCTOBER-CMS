<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/movies/head.htm */
class __TwigTemplate_8f9639733eb49cdf96353c4079312cabdbba5ea049fc2b9b6baf5da4f48f74eb extends Twig_Template
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
        echo "<div class=\"movies-head-container\">
\t<img src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/movies/slide02.jpg");
        echo "\" alt=\"\">
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/movies/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"movies-head-container\">
\t<img src=\"{{ \"assets/images/movies/slide02.jpg\"|theme }}\" alt=\"\">
</div>", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/movies/head.htm", "");
    }
}
