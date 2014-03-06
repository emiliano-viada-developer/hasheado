<?php

/* HasheadoBlogBundle::_sidebar.html.twig */
class __TwigTemplate_a70590516689a5bd2d4ff884874134885b706de89826d174aba87afa60dd39df extends Twig_Template
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
        echo "<div class=\"sidebar clearfix\">
\t\t
\t<!-- Search -->
\t<div>
\t\t<h3 class=\"title\">Search</h2>
\t\t<div>
\t\t\t<form class=\"form-search\" method=\"get\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_search");
        echo "\">
\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t<input type=\"text\" class=\"search-query\" name=\"q\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" />
\t\t\t\t\t<button type=\"submit\" class=\"btn ";
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "q"), "method")) == 0)) {
            echo "disabled";
        }
        echo "\">Search</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<!-- Categories -->
\t<div>
\t\t<h3 class=\"title\">Categories</h3>
\t\t<div>
\t\t\t";
        // line 20
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HasheadoBlogBundle:BlogCategory:withPosts"), array());
        // line 21
        echo "\t\t</div>
\t</div>

\t<!-- Archive -->
\t<div>
\t\t<h3 class=\"title\">Archive</h3>
\t\t<div>
\t\t\t";
        // line 28
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HasheadoBlogBundle:BlogPost:archive"), array());
        // line 29
        echo "\t\t</div>
\t</div>

\t<!-- Popular Posts -->
\t<div>
\t\t<h3 class=\"title\">Popular Posts</h3>
\t\t<div>
\t\t\t";
        // line 36
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HasheadoBlogBundle:BlogPost:popular"), array());
        // line 37
        echo "\t\t</div>
\t</div>

\t<!-- Latest Comments -->
\t<div>
\t\t<h3 class=\"title\">Latest Comments</h3>
\t\t<div>
\t\t\t";
        // line 44
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HasheadoBlogBundle:BlogComment:latest"), array());
        // line 45
        echo "\t\t</div>
\t</div>

\t<!-- Popular Tags -->
\t<div>
\t\t<h3 class=\"title\">Popular Tags</h3>
\t\t<div>
\t\t\t";
        // line 52
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HasheadoBlogBundle:BlogPost:tags"), array());
        // line 53
        echo "\t\t</div>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle::_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  73 => 36,  62 => 28,  51 => 20,  27 => 7,  57 => 31,  53 => 21,  33 => 13,  19 => 1,  177 => 66,  172 => 55,  169 => 54,  164 => 35,  157 => 49,  155 => 48,  146 => 41,  144 => 40,  138 => 36,  136 => 35,  125 => 27,  116 => 22,  56 => 17,  52 => 9,  49 => 8,  46 => 7,  35 => 4,  32 => 9,  127 => 28,  123 => 38,  119 => 23,  111 => 32,  109 => 31,  103 => 30,  97 => 53,  95 => 52,  89 => 26,  86 => 45,  84 => 44,  81 => 23,  72 => 20,  64 => 29,  58 => 16,  50 => 13,  45 => 10,  41 => 9,  38 => 8,  36 => 10,  31 => 4,  28 => 3,);
    }
}
