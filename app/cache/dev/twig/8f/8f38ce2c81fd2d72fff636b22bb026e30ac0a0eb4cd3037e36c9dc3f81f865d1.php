<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9748da83767b1857a77446b43b7feb3b46fce718730e2f032b2a015ef8cffb0c extends Twig_Template
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
        $__internal_1a5d0eacd59b57ed1f20eccb458d5abba7202852ea148a5f856ff03fee635e97 = $this->env->getExtension("native_profiler");
        $__internal_1a5d0eacd59b57ed1f20eccb458d5abba7202852ea148a5f856ff03fee635e97->enter($__internal_1a5d0eacd59b57ed1f20eccb458d5abba7202852ea148a5f856ff03fee635e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1a5d0eacd59b57ed1f20eccb458d5abba7202852ea148a5f856ff03fee635e97->leave($__internal_1a5d0eacd59b57ed1f20eccb458d5abba7202852ea148a5f856ff03fee635e97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
