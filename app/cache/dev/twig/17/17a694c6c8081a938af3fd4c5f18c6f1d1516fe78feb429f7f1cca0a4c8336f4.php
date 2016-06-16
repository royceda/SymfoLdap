<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ed58a6e8bc3baf4a5f692863db52784ee41b8048608eafb508f086808d7d6afd extends Twig_Template
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
        $__internal_362212ed80f4554d9d44c11e09318a17988b9ca419aa7636767a4b0daef7261a = $this->env->getExtension("native_profiler");
        $__internal_362212ed80f4554d9d44c11e09318a17988b9ca419aa7636767a4b0daef7261a->enter($__internal_362212ed80f4554d9d44c11e09318a17988b9ca419aa7636767a4b0daef7261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_362212ed80f4554d9d44c11e09318a17988b9ca419aa7636767a4b0daef7261a->leave($__internal_362212ed80f4554d9d44c11e09318a17988b9ca419aa7636767a4b0daef7261a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
