<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c0c97133c6672be56ca0b7aa3ede9badda3cfbed79a298add93f13a24b3d938d extends Twig_Template
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
        $__internal_c2edd8fa9441293f2f032b269f2d2919ebcddbc6c866fd60c767f89689601f84 = $this->env->getExtension("native_profiler");
        $__internal_c2edd8fa9441293f2f032b269f2d2919ebcddbc6c866fd60c767f89689601f84->enter($__internal_c2edd8fa9441293f2f032b269f2d2919ebcddbc6c866fd60c767f89689601f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c2edd8fa9441293f2f032b269f2d2919ebcddbc6c866fd60c767f89689601f84->leave($__internal_c2edd8fa9441293f2f032b269f2d2919ebcddbc6c866fd60c767f89689601f84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
