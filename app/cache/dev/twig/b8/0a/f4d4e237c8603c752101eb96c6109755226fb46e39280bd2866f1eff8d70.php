<?php

/* HasheadoBlogBundle:Admin/Default:_flash_messages.html.twig */
class __TwigTemplate_b80af4d4e237c8603c752101eb96c6109755226fb46e39280bd2866f1eff8d70 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 2
            echo "\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>";
            // line 4
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "key")), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), 0, array(), "array"), "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "HasheadoBlogBundle:Admin/Default:_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  61 => 9,  58 => 8,  54 => 7,  43 => 5,  40 => 4,  23 => 2,  111 => 43,  106 => 42,  103 => 41,  93 => 35,  88 => 34,  85 => 33,  83 => 32,  75 => 27,  70 => 26,  67 => 25,  65 => 11,  57 => 19,  52 => 18,  47 => 16,  39 => 11,  34 => 10,  24 => 3,  22 => 2,  60 => 28,  51 => 22,  44 => 18,  29 => 4,  25 => 5,  19 => 1,  222 => 69,  178 => 66,  173 => 61,  170 => 60,  165 => 42,  160 => 57,  158 => 56,  149 => 52,  138 => 43,  136 => 42,  133 => 41,  131 => 40,  128 => 39,  126 => 38,  121 => 36,  110 => 27,  108 => 26,  101 => 40,  99 => 20,  95 => 18,  92 => 17,  46 => 13,  41 => 6,  38 => 5,  32 => 9,  53 => 17,  49 => 6,  45 => 15,  31 => 3,  28 => 2,);
    }
}
