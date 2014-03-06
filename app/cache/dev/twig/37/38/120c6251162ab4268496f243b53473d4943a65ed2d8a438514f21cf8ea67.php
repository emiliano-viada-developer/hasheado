<?php

/* HasheadoBlogBundle::_header_nav.html.twig */
class __TwigTemplate_3738120c6251162ab4268496f243b53473d4943a65ed2d8a438514f21cf8ea67 extends Twig_Template
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
        echo "<!-- Nav --> 
<div class=\"navbar navbar-inverse span12\" style=\"position: static;\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t\t<a class=\"btn btn-navbar\" data-target=\".navbar-inverse-collapse\" data-toggle=\"collapse\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</a>
\t\t\t<div class=\"nav-collapse collapse navbar-inverse-collapse\">
\t\t\t\t<div class=\"span8\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_homepage");
        echo "\" rel=\"tooltip\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\" rel=\"tooltip\">Link</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Link</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-header\">Nav header</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">One more separated link</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<form class=\"navbar-search pull-left\" method=\"get\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_search");
        echo "\">
\t\t\t\t\t\t<input class=\"search-query w200\" name=\"q\" placeholder=\"Search\" type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<ul class=\"nav pull-right right-menu\">
\t\t\t\t\t\t<li><a href=\"#\">Link</a></li>
\t\t\t\t\t\t<li class=\"divider-vertical\"></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><!-- /.nav-collapse -->
\t\t</div>
\t</div><!-- /navbar-inner -->
</div>
<!-- END Nav -->

<!-- Header -->
<header id=\"mainhead\" class=\"clearfix row-fluid\">
\t<div class=\"container\" id=\"header-wrapper\">
\t\t<div id=\"header\" class=\"span10 offset2\">
\t\t\t<div class=\"header section\" id=\"blog-title\">
\t\t\t\t<div class=\"widget Header\" id=\"Header1\">
\t\t\t\t\t<div id=\"header-inner\">
\t\t\t\t\t\t<div class=\"titlewrapper\">
\t\t\t\t\t\t\t<h1 class=\"title\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getContext($context, "blog_title"), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"descriptionwrapper\">
\t\t\t\t\t\t\t<p class=\"description\"><span>Just a blog</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"top-ad\">
\t\t\t<div class=\"top-ad section\" id=\"top-ad\"></div>
\t\t</div>
\t</div>
</header>
<!-- END Header -->
";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle::_header_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 31,  53 => 30,  33 => 13,  19 => 1,  177 => 66,  172 => 55,  169 => 54,  164 => 35,  157 => 49,  155 => 48,  146 => 41,  144 => 40,  138 => 36,  136 => 35,  125 => 27,  116 => 22,  56 => 17,  52 => 9,  49 => 8,  46 => 7,  35 => 4,  32 => 3,  127 => 28,  123 => 38,  119 => 23,  111 => 32,  109 => 31,  103 => 30,  97 => 28,  95 => 66,  89 => 26,  86 => 25,  84 => 24,  81 => 23,  72 => 20,  64 => 17,  58 => 16,  50 => 13,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
