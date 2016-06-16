<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ba0136b7458d07029e2a4bcf2d3d93542329129dd2e2915a2f5a5595311b25ba extends Twig_Template
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
        $__internal_51033618b3d3fff0db3fd4383d5ee6df88ee09502254792a49af9a0d0ab39fa5 = $this->env->getExtension("native_profiler");
        $__internal_51033618b3d3fff0db3fd4383d5ee6df88ee09502254792a49af9a0d0ab39fa5->enter($__internal_51033618b3d3fff0db3fd4383d5ee6df88ee09502254792a49af9a0d0ab39fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_51033618b3d3fff0db3fd4383d5ee6df88ee09502254792a49af9a0d0ab39fa5->leave($__internal_51033618b3d3fff0db3fd4383d5ee6df88ee09502254792a49af9a0d0ab39fa5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
