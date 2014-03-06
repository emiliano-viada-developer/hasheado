<?php

/* HasheadoBlogBundle:Admin\Default:dashboard.html.twig */
class __TwigTemplate_28a02ef80299fbe48f54f2413e616613a21938d7939f2d20a7db591d8f8e8dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HasheadoBlogBundle::admin_layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HasheadoBlogBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"row-fluid sortable\">\t\t
\t\t<div class=\"box span12\">
\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t<h2><i class=\"icon-user\"></i> Dashboard</h2>
\t\t\t</div>

\t\t\t<div class=\"box span4\">
\t\t\t\t<div class=\"box-header well\">
\t\t\t\t\t<h2><i class=\"icon-list\"></i> Your blog has:</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t<ul class=\"dashboard-list\">
\t\t\t\t\t\t<li>";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "categories"), "html", null, true);
        echo " Categories.</li>
\t\t\t\t\t\t<li>";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "posts"), "html", null, true);
        echo " Posts.</li>
\t\t\t\t\t\t<li>";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "comments"), "html", null, true);
        echo " Comments.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:Admin\\Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  49 => 16,  45 => 15,  31 => 3,  28 => 2,);
    }
}
