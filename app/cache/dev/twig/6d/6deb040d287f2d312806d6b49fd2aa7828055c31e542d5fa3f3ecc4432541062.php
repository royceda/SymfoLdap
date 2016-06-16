<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fae7f3387fdda28a023566083f14b95c05d9a0355e151d20ddd4b4baa564f425 extends Twig_Template
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
        $__internal_ceffdcc129acddeede24a823b3379ff515ffea235b5c0c81ba99a7e3fe498bb2 = $this->env->getExtension("native_profiler");
        $__internal_ceffdcc129acddeede24a823b3379ff515ffea235b5c0c81ba99a7e3fe498bb2->enter($__internal_ceffdcc129acddeede24a823b3379ff515ffea235b5c0c81ba99a7e3fe498bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ceffdcc129acddeede24a823b3379ff515ffea235b5c0c81ba99a7e3fe498bb2->leave($__internal_ceffdcc129acddeede24a823b3379ff515ffea235b5c0c81ba99a7e3fe498bb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
