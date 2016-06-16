<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bf843133c550c3a63a38f7005dea9f300fef923e8ea9dfeed700756ad7cd89bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b117eaae0ca79e207f265a6074e931a39a96e79d039c85f17f1e96676bc63d = $this->env->getExtension("native_profiler");
        $__internal_46b117eaae0ca79e207f265a6074e931a39a96e79d039c85f17f1e96676bc63d->enter($__internal_46b117eaae0ca79e207f265a6074e931a39a96e79d039c85f17f1e96676bc63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b117eaae0ca79e207f265a6074e931a39a96e79d039c85f17f1e96676bc63d->leave($__internal_46b117eaae0ca79e207f265a6074e931a39a96e79d039c85f17f1e96676bc63d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cce7f690e20bcfa2b74323a2d07e9fb7233577f5ec526a53772dbfa282525bf5 = $this->env->getExtension("native_profiler");
        $__internal_cce7f690e20bcfa2b74323a2d07e9fb7233577f5ec526a53772dbfa282525bf5->enter($__internal_cce7f690e20bcfa2b74323a2d07e9fb7233577f5ec526a53772dbfa282525bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cce7f690e20bcfa2b74323a2d07e9fb7233577f5ec526a53772dbfa282525bf5->leave($__internal_cce7f690e20bcfa2b74323a2d07e9fb7233577f5ec526a53772dbfa282525bf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8712c9f9d238586763a0d09acf6012534fd1a6be20a60039651e0a5719607aa = $this->env->getExtension("native_profiler");
        $__internal_f8712c9f9d238586763a0d09acf6012534fd1a6be20a60039651e0a5719607aa->enter($__internal_f8712c9f9d238586763a0d09acf6012534fd1a6be20a60039651e0a5719607aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8712c9f9d238586763a0d09acf6012534fd1a6be20a60039651e0a5719607aa->leave($__internal_f8712c9f9d238586763a0d09acf6012534fd1a6be20a60039651e0a5719607aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f02d1f5c62865250b77825b7c06a34f59ae700de87ff56a1daf5ab04635aeea = $this->env->getExtension("native_profiler");
        $__internal_6f02d1f5c62865250b77825b7c06a34f59ae700de87ff56a1daf5ab04635aeea->enter($__internal_6f02d1f5c62865250b77825b7c06a34f59ae700de87ff56a1daf5ab04635aeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f02d1f5c62865250b77825b7c06a34f59ae700de87ff56a1daf5ab04635aeea->leave($__internal_6f02d1f5c62865250b77825b7c06a34f59ae700de87ff56a1daf5ab04635aeea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
