<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_722971f52e00d7bb145591f7359585767ecab0943a0d51ddfe26fbf2aabc223b extends Twig_Template
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
        $__internal_c9d6a78618343dded30c7e3928ecd1b644a5b52ed232a74e6224efdb2d2d4162 = $this->env->getExtension("native_profiler");
        $__internal_c9d6a78618343dded30c7e3928ecd1b644a5b52ed232a74e6224efdb2d2d4162->enter($__internal_c9d6a78618343dded30c7e3928ecd1b644a5b52ed232a74e6224efdb2d2d4162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c9d6a78618343dded30c7e3928ecd1b644a5b52ed232a74e6224efdb2d2d4162->leave($__internal_c9d6a78618343dded30c7e3928ecd1b644a5b52ed232a74e6224efdb2d2d4162_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
