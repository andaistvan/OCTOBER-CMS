<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/globals/scripts.htm */
class __TwigTemplate_e410116cd69d4f5740e59392304cb50a76904ab6dbd0d4f2369db9d5f90b507a extends Twig_Template
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
        echo "<!-- JQUERY -->
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>


<!-- VENDOR FRAMEWORK.JS  -->
<script src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/materialize.min.js"));
        echo "\"></script>


<!-- THEME.JS : scripts INIT  -->
<script src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/theme.js"));
        echo "\"></script>


<!-- OCTOBER FRAMEWORK : AJAX etc.  -->
";
        // line 14
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 15
        echo "

<!-- ADDONS : wow, sticky.js etc.  -->
";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("_addons/vendor-scripts-init"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "

<!-- NOTES -->
<!-- 'assets/js/materialize.min.js' -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/globals/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  52 => 18,  47 => 15,  40 => 14,  33 => 10,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- JQUERY -->
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>


<!-- VENDOR FRAMEWORK.JS  -->
<script src=\"{{ ['assets/js/materialize.min.js']|theme }}\"></script>


<!-- THEME.JS : scripts INIT  -->
<script src=\"{{ ['assets/js/theme.js']|theme }}\"></script>


<!-- OCTOBER FRAMEWORK : AJAX etc.  -->
{% framework extras %}


<!-- ADDONS : wow, sticky.js etc.  -->
{% partial \"_addons/vendor-scripts-init\" %}


<!-- NOTES -->
<!-- 'assets/js/materialize.min.js' -->", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/globals/scripts.htm", "");
    }
}
