<?php

/* HasheadoBlogBundle::_footer.html.twig */
class __TwigTemplate_24134da37bd55b151a7d4e5fea938acdd11555518619c95a978e1ae5f85374bb extends Twig_Template
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
        echo "<footer>
\t<div class=\"container\">
\t\t<div class=\"row-fluid\">
\t\t\t
\t\t\t<div class=\"span3 pvn\">
\t\t\t\t<h3>Footer column 1</h3>
\t\t\t\t<p>Some customized text here. I don't know, maybe something like about this page or about me.</p>
\t\t\t</div>

\t\t\t<div class=\"span3 pvn\">
\t\t\t\t<h3>Footer column 2</h3>
\t\t\t\t<p>Some customized text here. I don't know, maybe something like about this page or about me.</p>
\t\t\t</div>

\t\t\t<div class=\"span3 pvn\">
\t\t\t\t<h3>Footer column 3</h3>
\t\t\t\t<p>Some customized text here. I don't know, maybe something like about this page or about me.</p>
\t\t\t</div>

\t\t\t<div class=\"span3 pvn\">
\t\t\t\t<h3>Footer column 4</h3>
\t\t\t\t<p>Some customized text here. I don't know, maybe something like about this page or about me.</p>
\t\t\t</div>

\t\t</div>
\t</div>
\t<p class=\"footer-link\">
\t\t&copy; ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getContext($context, "blog_title"), "html", null, true);
        echo " - 
\t\tPowered by <a href=\"http://symfony.com\" target=\"_blank\">Symfony2</a>
\t</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle::_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 28,  47 => 10,  44 => 9,  29 => 4,  24 => 3,  22 => 2,  75 => 37,  73 => 36,  62 => 28,  51 => 12,  27 => 7,  57 => 31,  53 => 12,  33 => 6,  19 => 1,  177 => 66,  172 => 55,  169 => 54,  164 => 35,  157 => 49,  155 => 48,  146 => 41,  144 => 40,  138 => 36,  136 => 35,  125 => 27,  116 => 22,  56 => 13,  52 => 11,  49 => 10,  46 => 9,  35 => 7,  32 => 5,  127 => 28,  123 => 38,  119 => 23,  111 => 32,  109 => 31,  103 => 30,  97 => 53,  95 => 52,  89 => 26,  86 => 45,  84 => 44,  81 => 23,  72 => 20,  64 => 29,  58 => 16,  50 => 13,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
