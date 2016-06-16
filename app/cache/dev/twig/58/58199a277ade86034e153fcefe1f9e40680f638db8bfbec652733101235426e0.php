<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_160d2a1103f79bb8e49a091867d85e6eb026249d17ada89be82c1687e174b5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91893a1f6d97bba7d40451368a4542a1fd6af83b6b84d599454d9dd406247154 = $this->env->getExtension("native_profiler");
        $__internal_91893a1f6d97bba7d40451368a4542a1fd6af83b6b84d599454d9dd406247154->enter($__internal_91893a1f6d97bba7d40451368a4542a1fd6af83b6b84d599454d9dd406247154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91893a1f6d97bba7d40451368a4542a1fd6af83b6b84d599454d9dd406247154->leave($__internal_91893a1f6d97bba7d40451368a4542a1fd6af83b6b84d599454d9dd406247154_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e35cfc1dfadb167ffbbb2e654ae142d3ffdb5be388d830c18d10c283872be98d = $this->env->getExtension("native_profiler");
        $__internal_e35cfc1dfadb167ffbbb2e654ae142d3ffdb5be388d830c18d10c283872be98d->enter($__internal_e35cfc1dfadb167ffbbb2e654ae142d3ffdb5be388d830c18d10c283872be98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e35cfc1dfadb167ffbbb2e654ae142d3ffdb5be388d830c18d10c283872be98d->leave($__internal_e35cfc1dfadb167ffbbb2e654ae142d3ffdb5be388d830c18d10c283872be98d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e5602843dfd82b9b6017786279e004108f43c36e7727dc6581acf898b22fdef = $this->env->getExtension("native_profiler");
        $__internal_8e5602843dfd82b9b6017786279e004108f43c36e7727dc6581acf898b22fdef->enter($__internal_8e5602843dfd82b9b6017786279e004108f43c36e7727dc6581acf898b22fdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8e5602843dfd82b9b6017786279e004108f43c36e7727dc6581acf898b22fdef->leave($__internal_8e5602843dfd82b9b6017786279e004108f43c36e7727dc6581acf898b22fdef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3343f30d83631dc211c167aab839a83d854e278a515226834f34b994c75ae955 = $this->env->getExtension("native_profiler");
        $__internal_3343f30d83631dc211c167aab839a83d854e278a515226834f34b994c75ae955->enter($__internal_3343f30d83631dc211c167aab839a83d854e278a515226834f34b994c75ae955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3343f30d83631dc211c167aab839a83d854e278a515226834f34b994c75ae955->leave($__internal_3343f30d83631dc211c167aab839a83d854e278a515226834f34b994c75ae955_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
