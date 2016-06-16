<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_11d2ed58a6c9a0c49171134dc0e7d4d24b343ee61969a4e181679a5274e23633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6723899ebb5c81f2d95aa74217b55932329436ca0d82d85e188a4c2e79220836 = $this->env->getExtension("native_profiler");
        $__internal_6723899ebb5c81f2d95aa74217b55932329436ca0d82d85e188a4c2e79220836->enter($__internal_6723899ebb5c81f2d95aa74217b55932329436ca0d82d85e188a4c2e79220836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6723899ebb5c81f2d95aa74217b55932329436ca0d82d85e188a4c2e79220836->leave($__internal_6723899ebb5c81f2d95aa74217b55932329436ca0d82d85e188a4c2e79220836_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09957fc906dd4d8dfe44806c0aefa6ff54f102be5d1f48288bd261b23cdaec2e = $this->env->getExtension("native_profiler");
        $__internal_09957fc906dd4d8dfe44806c0aefa6ff54f102be5d1f48288bd261b23cdaec2e->enter($__internal_09957fc906dd4d8dfe44806c0aefa6ff54f102be5d1f48288bd261b23cdaec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_09957fc906dd4d8dfe44806c0aefa6ff54f102be5d1f48288bd261b23cdaec2e->leave($__internal_09957fc906dd4d8dfe44806c0aefa6ff54f102be5d1f48288bd261b23cdaec2e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c59836a9a65ec02f20399ede594f2b95104b93be51a4b52b2831699c1419383 = $this->env->getExtension("native_profiler");
        $__internal_4c59836a9a65ec02f20399ede594f2b95104b93be51a4b52b2831699c1419383->enter($__internal_4c59836a9a65ec02f20399ede594f2b95104b93be51a4b52b2831699c1419383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4c59836a9a65ec02f20399ede594f2b95104b93be51a4b52b2831699c1419383->leave($__internal_4c59836a9a65ec02f20399ede594f2b95104b93be51a4b52b2831699c1419383_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
