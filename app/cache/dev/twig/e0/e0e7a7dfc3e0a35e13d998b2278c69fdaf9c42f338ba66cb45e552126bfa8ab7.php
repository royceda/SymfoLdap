<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a36e98c70c593d0f2e767eb9b4fe3d753b0fd7b2503f5be9dbf159b597ce3c5f extends Twig_Template
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
        $__internal_b2a52f72ac856c879821edefce812626abe7a8a832f40c332b5ce3e7e1ad5190 = $this->env->getExtension("native_profiler");
        $__internal_b2a52f72ac856c879821edefce812626abe7a8a832f40c332b5ce3e7e1ad5190->enter($__internal_b2a52f72ac856c879821edefce812626abe7a8a832f40c332b5ce3e7e1ad5190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b2a52f72ac856c879821edefce812626abe7a8a832f40c332b5ce3e7e1ad5190->leave($__internal_b2a52f72ac856c879821edefce812626abe7a8a832f40c332b5ce3e7e1ad5190_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
