<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_469b400be579a95dac41402c8798abf97fe38cd273f6d697c1e851498a3861b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_84d58e5631fe463bfba07cb4180bcd3f5aa93bd1bab8f1bcaad842cefe547c2d = $this->env->getExtension("native_profiler");
        $__internal_84d58e5631fe463bfba07cb4180bcd3f5aa93bd1bab8f1bcaad842cefe547c2d->enter($__internal_84d58e5631fe463bfba07cb4180bcd3f5aa93bd1bab8f1bcaad842cefe547c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84d58e5631fe463bfba07cb4180bcd3f5aa93bd1bab8f1bcaad842cefe547c2d->leave($__internal_84d58e5631fe463bfba07cb4180bcd3f5aa93bd1bab8f1bcaad842cefe547c2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b42bc54c0fa254f2122354135ebd9cff47d74be40e13fbd1eabb64d103a0b00 = $this->env->getExtension("native_profiler");
        $__internal_1b42bc54c0fa254f2122354135ebd9cff47d74be40e13fbd1eabb64d103a0b00->enter($__internal_1b42bc54c0fa254f2122354135ebd9cff47d74be40e13fbd1eabb64d103a0b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1b42bc54c0fa254f2122354135ebd9cff47d74be40e13fbd1eabb64d103a0b00->leave($__internal_1b42bc54c0fa254f2122354135ebd9cff47d74be40e13fbd1eabb64d103a0b00_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_106c083f29b616e91150ebf1af6fa2d535e29ed3b0a439703746f0753c5abc91 = $this->env->getExtension("native_profiler");
        $__internal_106c083f29b616e91150ebf1af6fa2d535e29ed3b0a439703746f0753c5abc91->enter($__internal_106c083f29b616e91150ebf1af6fa2d535e29ed3b0a439703746f0753c5abc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_106c083f29b616e91150ebf1af6fa2d535e29ed3b0a439703746f0753c5abc91->leave($__internal_106c083f29b616e91150ebf1af6fa2d535e29ed3b0a439703746f0753c5abc91_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee47f7e4112c91ef3cb3b351cf1a70821943ecc7aa8e3ea7e498e6688cc304cf = $this->env->getExtension("native_profiler");
        $__internal_ee47f7e4112c91ef3cb3b351cf1a70821943ecc7aa8e3ea7e498e6688cc304cf->enter($__internal_ee47f7e4112c91ef3cb3b351cf1a70821943ecc7aa8e3ea7e498e6688cc304cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ee47f7e4112c91ef3cb3b351cf1a70821943ecc7aa8e3ea7e498e6688cc304cf->leave($__internal_ee47f7e4112c91ef3cb3b351cf1a70821943ecc7aa8e3ea7e498e6688cc304cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
