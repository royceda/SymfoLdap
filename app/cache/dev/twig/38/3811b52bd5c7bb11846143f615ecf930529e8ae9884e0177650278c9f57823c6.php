<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1e4ca25734ebb971c3701436d79d22a08c2d1456e5069cb85f31bee66d8dfcdb extends Twig_Template
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
        $__internal_001e31a24b86c6fc654ab64c0c92dd5c430d4beefca82e028568f61103009237 = $this->env->getExtension("native_profiler");
        $__internal_001e31a24b86c6fc654ab64c0c92dd5c430d4beefca82e028568f61103009237->enter($__internal_001e31a24b86c6fc654ab64c0c92dd5c430d4beefca82e028568f61103009237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_001e31a24b86c6fc654ab64c0c92dd5c430d4beefca82e028568f61103009237->leave($__internal_001e31a24b86c6fc654ab64c0c92dd5c430d4beefca82e028568f61103009237_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
