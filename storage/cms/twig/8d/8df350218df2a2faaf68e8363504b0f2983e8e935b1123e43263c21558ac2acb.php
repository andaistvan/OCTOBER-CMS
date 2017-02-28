<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/globals/header.htm */
class __TwigTemplate_b0c5d48be57ab73fd4d3f849e53295e80455fbb56d1b5333c642b640301cad2e extends Twig_Template
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
        echo "<header id=\"main-header\">

      <!-- MAIN MENU Dropdown Structure -->
         <ul id=\"dropdown1\" class=\"dropdown-content\">
            <li><a href=\"#!\">one</a></li>
            <li><a href=\"#!\">two</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#!\">three</a></li>
         </ul>

   <nav>
      <div class=\"nav-wrapper\">
         <a href=\"#!\" class=\"brand-logo\">Logo</a>

         <!-- MOBIL MENU SIDE-NAV Trigger -->
         <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\" id=\"bal-menu\"><i class=\"material-icons\">menu</i></a>

         <!-- MAIN MENU -->
         <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"sass.html\">Sass</a></li>
            <li class=\"";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "movies")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(" movies ");
        echo "\">Movies</a></li>
            <!-- Dropdown Trigger -->
            <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Dropdown<i class=\"material-icons right\">arrow_drop_down</i></a></li>
         </ul>


        <!-- MOBIL MENU SIDE-NEV Structure -->
        <ul class=\"side-nav\" id=\"mobile-demo\">
           <li class=\"";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "movies")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(" movies ");
        echo "\">Movies</a></li>
           <li><a href=\"badges.html\">Components</a></li>
           <li><a href=\"collapsible.html\">Javascript</a></li>
           <li><a href=\"mobile.html\">Mobile</a></li>
         </ul>


      </div>
   </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/globals/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 29,  41 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"main-header\">

      <!-- MAIN MENU Dropdown Structure -->
         <ul id=\"dropdown1\" class=\"dropdown-content\">
            <li><a href=\"#!\">one</a></li>
            <li><a href=\"#!\">two</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#!\">three</a></li>
         </ul>

   <nav>
      <div class=\"nav-wrapper\">
         <a href=\"#!\" class=\"brand-logo\">Logo</a>

         <!-- MOBIL MENU SIDE-NAV Trigger -->
         <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\" id=\"bal-menu\"><i class=\"material-icons\">menu</i></a>

         <!-- MAIN MENU -->
         <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"sass.html\">Sass</a></li>
            <li class=\"{% if this.page.id == 'movies' %}active{% endif %}\"><a href=\"{{' movies '|page}}\">Movies</a></li>
            <!-- Dropdown Trigger -->
            <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Dropdown<i class=\"material-icons right\">arrow_drop_down</i></a></li>
         </ul>


        <!-- MOBIL MENU SIDE-NEV Structure -->
        <ul class=\"side-nav\" id=\"mobile-demo\">
           <li class=\"{% if this.page.id == 'movies' %}active{% endif %}\"><a href=\"{{' movies '|page}}\">Movies</a></li>
           <li><a href=\"badges.html\">Components</a></li>
           <li><a href=\"collapsible.html\">Javascript</a></li>
           <li><a href=\"mobile.html\">Mobile</a></li>
         </ul>


      </div>
   </nav>
</header>", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/globals/header.htm", "");
    }
}
