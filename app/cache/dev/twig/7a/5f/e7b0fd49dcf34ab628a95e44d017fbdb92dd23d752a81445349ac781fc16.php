<?php

/* ::base.html.twig */
class __TwigTemplate_7a5fe7b0fd49dcf34ab628a95e44d017fbdb92dd23d752a81445349ac781fc16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
            if (!window.jQuery) {
                document.write(unescape('%3Cscript type=\"text/javascript\" src=\"/bundles/hasheadoblog/js/jquery-1.9.1.min.js\" %3E%3C/script%3E'));
            }
        </script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  65 => 6,  59 => 5,  53 => 18,  50 => 17,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  113 => 33,  108 => 20,  100 => 28,  91 => 21,  89 => 20,  83 => 16,  80 => 15,  41 => 6,  38 => 5,  32 => 3,  88 => 44,  70 => 16,  63 => 21,  60 => 20,  54 => 16,  48 => 16,  46 => 11,  36 => 6,  31 => 3,  28 => 2,);
    }
}
