<?php

/* HasheadoBlogBundle::admin_layout.html.twig */
class __TwigTemplate_bbd7efdb3fad3e7a72735b73daa6a4e9b65a4031e4e8887469fd84163d8ac5a0 extends Twig_Template
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
            // asset "3c28bd7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c28bd7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3c28bd7_bootstrap-classic_1.css");
            // line 13
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "3c28bd7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c28bd7_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3c28bd7_bootstrap-responsive_2.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "3c28bd7_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c28bd7_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3c28bd7_charisma-app_3.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "3c28bd7_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c28bd7_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3c28bd7_uniform.default_4.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "3c28bd7_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c28bd7_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3c28bd7_chosen_5.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
            // asset "3c28bd7_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c28bd7_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3c28bd7_main_6.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "3c28bd7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c28bd7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3c28bd7.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "\t
\t<!-- Header (Topbar) -->
\t";
        // line 20
        $this->env->loadTemplate("HasheadoBlogBundle:Admin/Default:_header.html.twig")->display($context);
        // line 21
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">

\t\t\t<!-- sidebar menu -->
\t\t\t";
        // line 26
        $this->env->loadTemplate("HasheadoBlogBundle:Admin/Default:_aside_menu.html.twig")->display($context);
        // line 27
        echo "\t\t\t
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>

\t\t\t<!-- content starts -->
\t\t\t<div id=\"content\" class=\"span10\" data-controller=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
        echo "\">

\t\t\t\t";
        // line 38
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HasheadoBlogBundle:Admin/Default:breadcrumb", array("current_route" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"))), array());
        // line 39
        echo "
\t\t\t\t";
        // line 40
        $this->env->loadTemplate("HasheadoBlogBundle:Admin/Default:_flash_messages.html.twig")->display($context);
        // line 41
        echo "
\t\t\t\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
\t\t\t</div>

\t\t</div>
\t</div> <!-- END container-fluid -->

\t<hr/>

\t<footer class=\"fadmin\">
\t\t<p class=\"text-center\">&copy; ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getContext($context, "blog_title"), "html", null, true);
        echo "</p>
\t</footer>

\t<!-- Modal Delete Confirmation -->
\t";
        // line 56
        $this->env->loadTemplate("HasheadoBlogBundle:Admin/Default:_modal_delete_confirmation.html.twig")->display($context);
        // line 57
        echo "
";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "58800bb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58800bb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/58800bb_bootstrap.min_1.js");
            // line 66
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "58800bb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58800bb_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/58800bb_bootstrap-modal_2.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "58800bb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58800bb_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/58800bb_bootstrap-collapse_3.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "58800bb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58800bb_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/58800bb_jquery.chosen.min_4.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "58800bb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58800bb_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/58800bb_hasheado-blog-admin_5.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
        } else {
            // asset "58800bb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58800bb") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/58800bb.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
        }
        unset($context["asset_url"]);
        // line 69
        echo "\t<script type=\"text/javascript\" src=\"/bundles/hasheadoblog/tinymce/js/tinymce/tinymce.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle::admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 69,  178 => 66,  173 => 61,  170 => 60,  165 => 42,  160 => 57,  158 => 56,  149 => 52,  138 => 43,  136 => 42,  133 => 41,  131 => 40,  128 => 39,  126 => 38,  121 => 36,  110 => 27,  108 => 26,  101 => 21,  99 => 20,  95 => 18,  92 => 17,  46 => 13,  41 => 6,  38 => 5,  32 => 3,  53 => 17,  49 => 16,  45 => 15,  31 => 3,  28 => 2,);
    }
}
