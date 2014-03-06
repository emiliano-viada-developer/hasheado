<?php

/* HasheadoBlogBundle:Admin/Security:login.html.twig */
class __TwigTemplate_da8a877647b5ad89e5402ee302efef87e1d7e5a461648675418a25f7f020e86c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HasheadoBlogBundle::admin_login_layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HasheadoBlogBundle::admin_login_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"row-fluid\">
        <div class=\"span12 center login-header\">
            <h2>Welcome to ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "blog_title"), "html", null, true);
        echo "</h2>
        </div><!--/span-->
    </div><!--/row-->

    <div class=\"row-fluid\">
        <div class=\"well span5 center login-box\">
            
            ";
        // line 13
        if ($this->getContext($context, "error")) {
            // line 14
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 16
            echo "                <div class=\"alert alert-info\">
                    Please login with your Username and Password.
                </div>
            ";
        }
        // line 20
        echo "
            <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("hasheado_blog_admin_login_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
                <fieldset>
                    <div class=\"input-prepend\" title=\"Username\" data-rel=\"tooltip\">
                        <span class=\"add-on\"><i class=\"icon-user\"></i></span>
                        <input autofocus class=\"input-large span9 mih\" name=\"_username\" id=\"username\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"clearfix\"></div>

                    <div class=\"input-prepend\" title=\"Password\" data-rel=\"tooltip\">
                        <span class=\"add-on\"><i class=\"icon-lock\"></i></span>
                        <input class=\"input-large span9 mih\" name=\"_password\" id=\"password\" type=\"password\" value=\"\" />
                    </div>
                    <div class=\"clearfix\"></div>

                    <div class=\"input-prepend\">
                        <label class=\"remember\" for=\"remember\"><input type=\"checkbox\" id=\"remember\" name=\"_remember_me\" />   Remember me</label>
                    </div>
                    <div class=\"clearfix\"></div>

                    ";
        // line 44
        echo "
                    <p class=\"center span5\">
                        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                    </p>
                </fieldset>
            </form>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  70 => 25,  63 => 21,  60 => 20,  54 => 16,  48 => 14,  46 => 13,  36 => 6,  31 => 3,  28 => 2,);
    }
}
