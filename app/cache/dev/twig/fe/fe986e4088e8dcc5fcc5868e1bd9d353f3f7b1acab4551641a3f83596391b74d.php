<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7278a6d8d4b7e4d6b71720a2481442975049b572994386396cda19694f30cfd1 extends Twig_Template
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
        $__internal_6c8d747d731602b899f12f39e4fc52718a83393ffed23fb45cbbf56744855430 = $this->env->getExtension("native_profiler");
        $__internal_6c8d747d731602b899f12f39e4fc52718a83393ffed23fb45cbbf56744855430->enter($__internal_6c8d747d731602b899f12f39e4fc52718a83393ffed23fb45cbbf56744855430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6c8d747d731602b899f12f39e4fc52718a83393ffed23fb45cbbf56744855430->leave($__internal_6c8d747d731602b899f12f39e4fc52718a83393ffed23fb45cbbf56744855430_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
