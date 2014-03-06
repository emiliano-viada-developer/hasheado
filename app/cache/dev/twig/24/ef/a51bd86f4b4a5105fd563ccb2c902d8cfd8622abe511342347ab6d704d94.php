<?php

/* HasheadoBlogBundle::layout.html.twig */
class __TwigTemplate_24efa51bd86f4b4a5105fd563ccb2c902d8cfd8622abe511342347ab6d704d94 extends Twig_Template
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
        // line 4
        echo "\t";
        if (array_key_exists("page_title", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "page_title"), "html", null, true);
            echo " | ";
        }
        echo " Hasheado Blog
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0d33710_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710_bootstrap-responsive.min_1.css");
            // line 17
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
            // asset "0d33710_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710_bootstrap-classic_2.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
            // asset "0d33710_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710_shCore_3.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
            // asset "0d33710_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710_shCoreDefault_4.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
            // asset "0d33710_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710_shThemeRDark_5.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
            // asset "0d33710_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710_main_6.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
            // asset "0d33710_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710_spaces_7.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
        } else {
            // asset "0d33710"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d33710") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d33710.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />

\t";
        }
        unset($context["asset_url"]);
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "\t
\t<div class=\"row-fluid\">

\t\t<!-- Header nav -->
\t\t";
        // line 27
        $this->env->loadTemplate("HasheadoBlogBundle::_header_nav.html.twig")->display($context);
        // line 28
        echo "
\t\t<div class=\"container\" id=\"container\">

\t\t\t<div class=\"row-fluid\">

\t\t\t\t<!-- Main content -->
\t\t\t\t<div class=\"span8 clearfix\">
\t\t\t\t\t";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t\t\t</div>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<aside class=\"span4 rightbar\">
\t\t\t\t\t";
        // line 40
        $this->env->loadTemplate("HasheadoBlogBundle::_sidebar.html.twig")->display($context);
        // line 41
        echo "\t\t\t\t</aside>
\t\t\t\t
\t\t\t</div>

\t\t</div> <!-- END main container -->

\t\t<!-- Footer -->
\t\t";
        // line 48
        $this->env->loadTemplate("HasheadoBlogBundle::_footer.html.twig")->display($context);
        // line 49
        echo "
\t</div>

";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78df32c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_bootstrap.min_1.js");
            // line 66
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_bootstrap-modal_2.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shCore_3.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shBrushJScript_4.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shBrushPhp_5.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shBrushBash_6.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shBrushCss_7.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shBrushPlain_8.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shBrushSql_9.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_shBrushXml_10.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
            // asset "78df32c_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c_hasheado-blog_11.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
        } else {
            // asset "78df32c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78df32c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78df32c.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

\t";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 66,  172 => 55,  169 => 54,  164 => 35,  157 => 49,  155 => 48,  146 => 41,  144 => 40,  138 => 36,  136 => 35,  125 => 27,  116 => 22,  56 => 17,  52 => 9,  49 => 8,  46 => 7,  35 => 4,  32 => 3,  127 => 28,  123 => 38,  119 => 23,  111 => 32,  109 => 31,  103 => 30,  97 => 28,  95 => 27,  89 => 26,  86 => 25,  84 => 24,  81 => 23,  72 => 20,  64 => 17,  58 => 16,  50 => 13,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
