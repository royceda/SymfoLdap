<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5ef3e41a1db61914ebc65138d868f8d9f7611bca8b151b67deb8c8e3e83b0d09 extends Twig_Template
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
        $__internal_dc97064d9f20eadab62644326ea5177d7deb2e0daf5fbf8bde17231d681ae8c5 = $this->env->getExtension("native_profiler");
        $__internal_dc97064d9f20eadab62644326ea5177d7deb2e0daf5fbf8bde17231d681ae8c5->enter($__internal_dc97064d9f20eadab62644326ea5177d7deb2e0daf5fbf8bde17231d681ae8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dc97064d9f20eadab62644326ea5177d7deb2e0daf5fbf8bde17231d681ae8c5->leave($__internal_dc97064d9f20eadab62644326ea5177d7deb2e0daf5fbf8bde17231d681ae8c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
