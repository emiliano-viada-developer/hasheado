<?php

/* HasheadoBlogBundle:Admin\Default:breadcrumb.html.twig */
class __TwigTemplate_b4a78eb472bd6ba41e6bf81e1644c9e464419379c1c3b2a1ecefd79e7604a0d3 extends Twig_Template
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
        echo "<div>
\t<ul class=\"breadcrumb\">
\t\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "breadcrumb"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 4
            echo "\t\t\t<li>
\t\t\t\t";
            // line 5
            if ($this->getAttribute($this->getContext($context, "step", true), "route", array(), "any", true, true)) {
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "step"), "route"));
                echo "\">";
            }
            // line 6
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "step"), "label"), "html", null, true);
            echo "
\t\t\t\t";
            // line 7
            if ($this->getAttribute($this->getContext($context, "step", true), "route", array(), "any", true, true)) {
                echo "</a>";
            }
            // line 8
            echo "\t\t\t\t";
            if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                // line 9
                echo "\t\t\t\t\t<span class=\"divider\">/</span>
\t\t\t\t";
            }
            // line 11
            echo "\t\t\t</li>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:Admin\\Default:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  61 => 9,  58 => 8,  54 => 7,  43 => 5,  40 => 4,  23 => 3,  111 => 43,  106 => 42,  103 => 41,  93 => 35,  88 => 34,  85 => 33,  83 => 32,  75 => 27,  70 => 26,  67 => 25,  65 => 11,  57 => 19,  52 => 18,  47 => 16,  39 => 11,  34 => 10,  24 => 3,  22 => 2,  60 => 28,  51 => 22,  44 => 18,  29 => 6,  25 => 5,  19 => 1,  222 => 69,  178 => 66,  173 => 61,  170 => 60,  165 => 42,  160 => 57,  158 => 56,  149 => 52,  138 => 43,  136 => 42,  133 => 41,  131 => 40,  128 => 39,  126 => 38,  121 => 36,  110 => 27,  108 => 26,  101 => 40,  99 => 20,  95 => 18,  92 => 17,  46 => 13,  41 => 6,  38 => 5,  32 => 9,  53 => 17,  49 => 6,  45 => 15,  31 => 3,  28 => 2,);
    }
}
