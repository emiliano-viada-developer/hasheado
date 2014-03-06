<?php

/* HasheadoBlogBundle:Admin/Default:_aside_menu.html.twig */
class __TwigTemplate_6b70cc0ebe0a7123c576aad792a123b664ca4db909e8d4ce72c7e08e0ce2f353 extends Twig_Template
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
        echo "<!-- left menu starts -->
";
        // line 2
        $context["current_route"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 3
        echo "<aside class=\"span2 main-menu-span\">
\t<div class=\"well nav-collapse sidebar-nav collapse\">
\t\t<ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t\t
\t\t\t<li class=\"nav-header hidden-tablet\">Menu</li>
\t\t\t
\t\t\t";
        // line 9
        $context["dashboard_active"] = ((($this->getContext($context, "current_route") == "hasheado_blog_admin_dashboard")) ? ("class=active") : (null));
        // line 10
        echo "\t\t\t<li ";
        echo twig_escape_filter($this->env, $this->getContext($context, "dashboard_active"), "html", null, true);
        echo ">
\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_dashboard");
        echo "\" title=\"Dashboard\">
\t\t\t\t\t<i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Dashboard</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t
\t\t\t";
        // line 16
        $context["categories_routes"] = array(0 => "hasheado_blog_admin_category_list", 1 => "hasheado_blog_admin_category_pagination", 2 => "hasheado_blog_admin_category_add", 3 => "hasheado_blog_admin_category_edit");
        // line 17
        echo "\t\t\t";
        $context["categories_active"] = ((twig_in_filter($this->getContext($context, "current_route"), $this->getContext($context, "categories_routes"))) ? ("class=active") : (null));
        // line 18
        echo "\t\t\t<li ";
        echo twig_escape_filter($this->env, $this->getContext($context, "categories_active"), "html", null, true);
        echo ">
\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_category_list");
        echo "\" title=\"Categories\">
\t\t\t\t\t<i class=\"icon-list\"></i><span class=\"hidden-tablet\"> Categories</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t";
        // line 24
        $context["posts_routes"] = array(0 => "hasheado_blog_admin_post_list", 1 => "hasheado_blog_admin_post_pagination", 2 => "hasheado_blog_admin_post_add", 3 => "hasheado_blog_admin_post_edit");
        // line 25
        echo "\t\t\t";
        $context["posts_active"] = ((twig_in_filter($this->getContext($context, "current_route"), $this->getContext($context, "posts_routes"))) ? ("class=active") : (null));
        // line 26
        echo "\t\t\t<li ";
        echo twig_escape_filter($this->env, $this->getContext($context, "posts_active"), "html", null, true);
        echo ">
\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_post_list");
        echo "\" title=\"Posts\">
\t\t\t\t\t<i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Posts</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t";
        // line 32
        $context["comments_routes"] = array(0 => "hasheado_blog_admin_comment_list", 1 => "hasheado_blog_admin_comment_pagination", 2 => "hasheado_blog_admin_comment_add", 3 => "hasheado_blog_admin_comment_edit");
        // line 33
        echo "\t\t\t";
        $context["comments_active"] = ((twig_in_filter($this->getContext($context, "current_route"), $this->getContext($context, "comments_routes"))) ? ("class=active") : (null));
        // line 34
        echo "\t\t\t<li ";
        echo twig_escape_filter($this->env, $this->getContext($context, "comments_active"), "html", null, true);
        echo ">
\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_comment_list");
        echo "\" title=\"Comments\">
\t\t\t\t\t<i class=\"icon-comment\"></i><span class=\"hidden-tablet\"> Comments</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t";
        // line 40
        $context["tags_routes"] = array(0 => "hasheado_blog_admin_tag_list", 1 => "hasheado_blog_admin_tag_pagination", 2 => "hasheado_blog_admin_tag_add", 3 => "hasheado_blog_admin_tag_edit");
        // line 41
        echo "\t\t\t";
        $context["tags_active"] = ((twig_in_filter($this->getContext($context, "current_route"), $this->getContext($context, "tags_routes"))) ? ("class=active") : (null));
        // line 42
        echo "\t\t\t<li ";
        echo twig_escape_filter($this->env, $this->getContext($context, "tags_active"), "html", null, true);
        echo ">
\t\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_tag_list");
        echo "\" title=\"Tags\">
\t\t\t\t\t<i class=\"icon-tag\"></i><span class=\"hidden-tablet\"> Tags</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div><!--/.well -->
</aside><!--/span-->
<!-- left menu ends -->";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:Admin/Default:_aside_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  106 => 42,  103 => 41,  93 => 35,  88 => 34,  85 => 33,  83 => 32,  75 => 27,  70 => 26,  67 => 25,  65 => 24,  57 => 19,  52 => 18,  47 => 16,  39 => 11,  34 => 10,  24 => 3,  22 => 2,  60 => 28,  51 => 22,  44 => 18,  29 => 6,  25 => 5,  19 => 1,  222 => 69,  178 => 66,  173 => 61,  170 => 60,  165 => 42,  160 => 57,  158 => 56,  149 => 52,  138 => 43,  136 => 42,  133 => 41,  131 => 40,  128 => 39,  126 => 38,  121 => 36,  110 => 27,  108 => 26,  101 => 40,  99 => 20,  95 => 18,  92 => 17,  46 => 13,  41 => 6,  38 => 5,  32 => 9,  53 => 17,  49 => 17,  45 => 15,  31 => 3,  28 => 2,);
    }
}
