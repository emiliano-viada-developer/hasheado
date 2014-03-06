<?php

/* HasheadoBlogBundle:Admin/Default:_header.html.twig */
class __TwigTemplate_5807537c2644439c996850f6a20dbbb233aa2fb0d5ff0eb04f2dcb0035ca6626 extends Twig_Template
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
        echo "<!-- Topbar -->
<div class=\"navbar\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_dashboard");
        echo "\">
\t\t\t\t<span>";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "blog_title"), "html", null, true);
        echo " Admin</span>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</a>

\t\t\t<!-- user dropdown -->
\t\t\t<div class=\"btn-group pull-right\" >
\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t<i class=\"icon-user\"></i><span class=\"hidden-phone\"> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "</span>
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_logout");
        echo "\">Logout</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"top-nav nav-collapse collapse\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_homepage");
        echo "\" target=\"_blank\">[ Visit Site ]</a></li>
\t\t\t\t</ul>
\t\t\t</div><!--/.nav-collapse -->
\t\t</div>
\t</div>
</div>
<!-- End Topbar -->";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:Admin/Default:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  51 => 22,  44 => 18,  29 => 6,  25 => 5,  19 => 1,  222 => 69,  178 => 66,  173 => 61,  170 => 60,  165 => 42,  160 => 57,  158 => 56,  149 => 52,  138 => 43,  136 => 42,  133 => 41,  131 => 40,  128 => 39,  126 => 38,  121 => 36,  110 => 27,  108 => 26,  101 => 21,  99 => 20,  95 => 18,  92 => 17,  46 => 13,  41 => 6,  38 => 5,  32 => 3,  53 => 17,  49 => 16,  45 => 15,  31 => 3,  28 => 2,);
    }
}
