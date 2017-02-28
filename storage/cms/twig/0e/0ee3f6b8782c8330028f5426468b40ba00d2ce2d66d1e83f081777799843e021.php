<?php

/* /Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/builderList/mod.htm */
class __TwigTemplate_485e1906cac870b649cd9b215785c5cee728faeea15c83766a62e2bb43b47846 extends Twig_Template
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
        $context["records"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "records", array());
        // line 2
        $context["displayColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = $this->getAttribute((isset($context["builderList"]) ? $context["builderList"] : null), "detailsUrlParameter", array());
        // line 7
        echo "
<table class=\"record-list highlight bordered striped \">
<thead>
   <tr>
      <th data-fileld=\"id\"><h5>name</h5></th>
   </tr>
</thead>
<tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "
    <tr>
      <td>
            ";
            // line 20
            echo "            <h5>
            ";
            // line 21
            ob_start();
            // line 22
            echo "                ";
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 23
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter((isset($context["detailsPage"]) ? $context["detailsPage"] : null), array((isset($context["detailsUrlParameter"]) ? $context["detailsUrlParameter"] : null) => $this->getAttribute($context["record"], (isset($context["detailsKeyColumn"]) ? $context["detailsKeyColumn"] : null))));
                echo "\">
                ";
            }
            // line 25
            echo "               
               ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "name", array()), "html", null, true);
            echo "
                ";
            // line 27
            if ((isset($context["detailsPage"]) ? $context["detailsPage"] : null)) {
                // line 28
                echo "                    </a>
                ";
            }
            // line 30
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 32
            echo "            </h5>
            ";
            // line 33
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["record"], "description", array()), 100));
            echo "
      </td>
   </tr>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        <td class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noRecordsMessage"]) ? $context["noRecordsMessage"] : null), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</tbody>


    </table>


";
        // line 47
        if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > 1)) {
            // line 48
            echo "    <ul class=\"pagination\">
        ";
            // line 49
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) > 1)) {
                // line 50
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 52
            echo "
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 54
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 55
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
        ";
            // line 59
            if (($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "lastPage", array()) > $this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()))) {
                // line 60
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["records"]) ? $context["records"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 62
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/builderList/mod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  154 => 60,  152 => 59,  149 => 58,  138 => 55,  133 => 54,  129 => 53,  126 => 52,  120 => 50,  118 => 49,  115 => 48,  113 => 47,  104 => 40,  95 => 38,  85 => 33,  82 => 32,  78 => 30,  74 => 28,  72 => 27,  68 => 26,  65 => 25,  59 => 23,  56 => 22,  54 => 21,  51 => 20,  46 => 16,  41 => 15,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<table class=\"record-list highlight bordered striped \">
<thead>
   <tr>
      <th data-fileld=\"id\"><h5>name</h5></th>
   </tr>
</thead>
<tbody>
    {% for record in records %}

    <tr>
      <td>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            <h5>
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
               
               {{ record.name }}
                {% if detailsPage %}
                    </a>
                {% endif %}

            {% endspaceless %}
            </h5>
            {{ html_limit(record.description, 100)|raw }}
      </td>
   </tr>

    {% else %}
        <td class=\"no-data\">{{ noRecordsMessage }}</td>
    {% endfor %}

</tbody>


    </table>


{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "/Applications/MAMP/htdocs/ocms-plugin/themes/ocms-plugin/partials/builderList/mod.htm", "");
    }
}
