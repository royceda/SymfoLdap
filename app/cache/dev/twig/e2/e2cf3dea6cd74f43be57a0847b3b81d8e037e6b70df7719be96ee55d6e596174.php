<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a9aa70784c4ac286bfb264087245b38c688c3af52c0b5b70a0997aea2d48f446 extends Twig_Template
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
        $__internal_040c16965d1eeff4434ccebc6d703e5529c118fc14410fc2fd15395fe45bb28b = $this->env->getExtension("native_profiler");
        $__internal_040c16965d1eeff4434ccebc6d703e5529c118fc14410fc2fd15395fe45bb28b->enter($__internal_040c16965d1eeff4434ccebc6d703e5529c118fc14410fc2fd15395fe45bb28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_040c16965d1eeff4434ccebc6d703e5529c118fc14410fc2fd15395fe45bb28b->leave($__internal_040c16965d1eeff4434ccebc6d703e5529c118fc14410fc2fd15395fe45bb28b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
