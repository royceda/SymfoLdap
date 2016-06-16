<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4348469bc018a74a41cd3af1b5d8825cd494fbd3007002f21989a2a7c8ef09ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_045f0de9db703b5e65db4aacb0328b6fbb3100f24f0eb287bfa4e535dd2fa6f4 = $this->env->getExtension("native_profiler");
        $__internal_045f0de9db703b5e65db4aacb0328b6fbb3100f24f0eb287bfa4e535dd2fa6f4->enter($__internal_045f0de9db703b5e65db4aacb0328b6fbb3100f24f0eb287bfa4e535dd2fa6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_045f0de9db703b5e65db4aacb0328b6fbb3100f24f0eb287bfa4e535dd2fa6f4->leave($__internal_045f0de9db703b5e65db4aacb0328b6fbb3100f24f0eb287bfa4e535dd2fa6f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c66f8b70334828b187c8b2e154d8f11e5ab339c41f58987bd1fa064ffa90af74 = $this->env->getExtension("native_profiler");
        $__internal_c66f8b70334828b187c8b2e154d8f11e5ab339c41f58987bd1fa064ffa90af74->enter($__internal_c66f8b70334828b187c8b2e154d8f11e5ab339c41f58987bd1fa064ffa90af74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c66f8b70334828b187c8b2e154d8f11e5ab339c41f58987bd1fa064ffa90af74->leave($__internal_c66f8b70334828b187c8b2e154d8f11e5ab339c41f58987bd1fa064ffa90af74_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
