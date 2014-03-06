<?php

/* HasheadoBlogBundle:Default:index.html.twig */
class __TwigTemplate_63156f9c8f1f3dd1c1a52671094ed94e26de4c4d8a28451c6d35ba85389cffea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HasheadoBlogBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HasheadoBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t<section class=\"homepage\">
\t
\t\t";
        // line 7
        if ((twig_length_filter($this->env, $this->getContext($context, "posts")) > 0)) {
            // line 8
            echo "\t\t\t
\t\t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "posts"));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 10
                echo "\t\t\t\t<article>
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hasheado_blog_post_detail", array("slug" => $this->getAttribute($this->getContext($context, "post"), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p>Posted on
\t\t\t\t\t\t\t<time datetime=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "publishedAt"), "format", array(0 => "c"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "publishedAt"), "format", array(0 => "F jS Y"), "method"), "html", null, true);
                echo "</time> -
\t\t\t\t\t\t\t<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hasheado_blog_post_detail", array("slug" => $this->getAttribute($this->getContext($context, "post"), "slug"))), "html", null, true);
                echo "#comments\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "comments")), "html", null, true);
                echo " comments</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</header>
\t\t\t\t\t<p>";
                // line 20
                echo $this->getAttribute($this->getContext($context, "post"), "content");
                echo "</p>
\t\t\t\t</article>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
\t\t\t";
            // line 24
            if ($this->getAttribute($this->getContext($context, "paginator"), "have_to_paginate")) {
                // line 25
                echo "\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t<li class=\"previous ";
                // line 26
                if (($this->getAttribute($this->getContext($context, "paginator"), "page") == 1)) {
                    echo "disabled";
                }
                echo "\">
\t\t\t\t\t\t";
                // line 27
                $context["newer_link"] = ((($this->getAttribute($this->getContext($context, "paginator"), "page") == 1)) ? ("javascript:void(0)") : ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "paginator"), "route"), array("page" => $this->getAttribute($this->getContext($context, "paginator"), "left")))));
                // line 28
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "newer_link"), "html", null, true);
                echo "\">&larr; Newer</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"next ";
                // line 30
                if (($this->getAttribute($this->getContext($context, "paginator"), "page") == $this->getAttribute($this->getContext($context, "paginator"), "num_pages"))) {
                    echo "disabled";
                }
                echo "\">
\t\t\t\t\t\t";
                // line 31
                $context["older_link"] = ((($this->getAttribute($this->getContext($context, "paginator"), "page") == $this->getAttribute($this->getContext($context, "paginator"), "num_pages"))) ? ("javascript:void(0)") : ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "paginator"), "route"), array("page" => $this->getAttribute($this->getContext($context, "paginator"), "right")))));
                // line 32
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "older_link"), "html", null, true);
                echo "\">Older &rarr;</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t";
            }
            // line 36
            echo "
\t\t";
        } else {
            // line 38
            echo "\t\t\t<p>No posts found.</p>
\t\t";
        }
        // line 40
        echo "\t\t
\t</section>

";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  123 => 38,  119 => 36,  111 => 32,  109 => 31,  103 => 30,  97 => 28,  95 => 27,  89 => 26,  86 => 25,  84 => 24,  81 => 23,  72 => 20,  64 => 17,  58 => 16,  50 => 13,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
