<?php

/* HasheadoBlogBundle::admin_login_layout.html.twig */
class __TwigTemplate_9fc7420372390acff356f89577267a7a9805c3ddc50d4a9074b100df4db5b4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Blog - Admin";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "73d3c69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_73d3c69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/73d3c69_bootstrap-classic_1.css");
            // line 11
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "73d3c69_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_73d3c69_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/73d3c69_charisma-app_2.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "73d3c69_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_73d3c69_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/73d3c69_bootstrap-responsive.min_3.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "73d3c69_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_73d3c69_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/73d3c69_main_4.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "73d3c69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_73d3c69") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/73d3c69.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "\t
\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">

\t\t\t";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "
\t\t</div>
\t</div> <!-- END container-fluid -->

\t<hr/>

\t<footer class=\"fadmin\">
\t\t<p class=\"text-center\">&copy; 2013 - ";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "blog_title"), "html", null, true);
        echo "</p>
\t</footer>

";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle::admin_login_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  108 => 20,  100 => 28,  91 => 21,  89 => 20,  83 => 16,  80 => 15,  41 => 6,  38 => 5,  32 => 3,  88 => 44,  70 => 25,  63 => 21,  60 => 20,  54 => 16,  48 => 14,  46 => 11,  36 => 6,  31 => 3,  28 => 2,);
    }
}
