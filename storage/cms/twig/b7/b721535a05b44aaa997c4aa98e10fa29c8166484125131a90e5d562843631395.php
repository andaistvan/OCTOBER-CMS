<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/layouts/default.htm */
class __TwigTemplate_e9ea9502b86de8aa610e1ee6c3c3359871d3545ebab9ca22a85dbb63763e0e51 extends Twig_Template
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
        echo "<html lang=\"hu\">
<head>
   ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("globals/meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "   ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("globals/stylesheet"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "   ";
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 6
        echo "</head>
<body>

";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("globals/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "
";
        // line 11
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 12
        echo "
";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("globals/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("globals/scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 16
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 17
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  64 => 16,  60 => 15,  57 => 14,  53 => 13,  50 => 12,  48 => 11,  45 => 10,  41 => 9,  36 => 6,  32 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"hu\">
<head>
   {% partial \"globals/meta\" %}
   {% partial \"globals/stylesheet\" %}
   {% styles %}
</head>
<body>

{% partial \"globals/header\" %}

{% page %}

{% partial \"globals/footer\" %}

{% partial \"globals/scripts\" %}
{% scripts %}
</body>
</html>", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/layouts/default.htm", "");
    }
}
