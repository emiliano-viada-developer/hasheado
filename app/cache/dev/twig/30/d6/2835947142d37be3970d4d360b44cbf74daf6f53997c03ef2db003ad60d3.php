<?php

/* HasheadoBlogBundle:BlogPost:popular.html.twig */
class __TwigTemplate_30d62835947142d37be3970d4d360b44cbf74daf6f53997c03ef2db003ad60d3 extends Twig_Template
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
        echo "<ul class=\"unstyled\">
\t";
        // line 2
        if ((twig_length_filter($this->env, $this->getContext($context, "posts")) > 0)) {
            // line 3
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "posts"));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 4
                echo "\t\t\t<li> 
\t\t\t\t<i class=\"icon-flag\"></i>
\t\t\t\t<a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hasheado_blog_post_detail", array("slug" => $this->getAttribute($this->getAttribute($this->getContext($context, "post"), 0, array(), "array"), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), 0, array(), "array"), "html", null, true);
                echo "</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<li>No posts.</li>
\t";
        }
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:BlogPost:popular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  29 => 4,  24 => 3,  22 => 2,  75 => 37,  73 => 36,  62 => 28,  51 => 12,  27 => 7,  57 => 31,  53 => 21,  33 => 6,  19 => 1,  177 => 66,  172 => 55,  169 => 54,  164 => 35,  157 => 49,  155 => 48,  146 => 41,  144 => 40,  138 => 36,  136 => 35,  125 => 27,  116 => 22,  56 => 13,  52 => 11,  49 => 10,  46 => 7,  35 => 7,  32 => 5,  127 => 28,  123 => 38,  119 => 23,  111 => 32,  109 => 31,  103 => 30,  97 => 53,  95 => 52,  89 => 26,  86 => 45,  84 => 44,  81 => 23,  72 => 20,  64 => 29,  58 => 16,  50 => 13,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
