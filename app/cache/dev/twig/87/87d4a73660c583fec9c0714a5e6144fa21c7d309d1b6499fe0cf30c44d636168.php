<?php

/* base.html.twig */
class __TwigTemplate_e679e148a9e857161aa1935ec7505e64e6582ef8f810730e039a3d590fb2520c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fe8ffc3618f8d72f0c5a07768b3f5c5e6c9d5b6116e828c2de8437695e1c8aa = $this->env->getExtension("native_profiler");
        $__internal_5fe8ffc3618f8d72f0c5a07768b3f5c5e6c9d5b6116e828c2de8437695e1c8aa->enter($__internal_5fe8ffc3618f8d72f0c5a07768b3f5c5e6c9d5b6116e828c2de8437695e1c8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5fe8ffc3618f8d72f0c5a07768b3f5c5e6c9d5b6116e828c2de8437695e1c8aa->leave($__internal_5fe8ffc3618f8d72f0c5a07768b3f5c5e6c9d5b6116e828c2de8437695e1c8aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a4ad44e6ea191d9ab2ecce8d22050231654252edbf440a3228375ef05779bff = $this->env->getExtension("native_profiler");
        $__internal_7a4ad44e6ea191d9ab2ecce8d22050231654252edbf440a3228375ef05779bff->enter($__internal_7a4ad44e6ea191d9ab2ecce8d22050231654252edbf440a3228375ef05779bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7a4ad44e6ea191d9ab2ecce8d22050231654252edbf440a3228375ef05779bff->leave($__internal_7a4ad44e6ea191d9ab2ecce8d22050231654252edbf440a3228375ef05779bff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fb0b93197282a0ccb6d30150f2679dee48bd956252d75fef1f864744157e429 = $this->env->getExtension("native_profiler");
        $__internal_5fb0b93197282a0ccb6d30150f2679dee48bd956252d75fef1f864744157e429->enter($__internal_5fb0b93197282a0ccb6d30150f2679dee48bd956252d75fef1f864744157e429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5fb0b93197282a0ccb6d30150f2679dee48bd956252d75fef1f864744157e429->leave($__internal_5fb0b93197282a0ccb6d30150f2679dee48bd956252d75fef1f864744157e429_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_87428cc84c67cc9bbf8afc84817a7ed88f17e7636750a0c88c0711ad55501518 = $this->env->getExtension("native_profiler");
        $__internal_87428cc84c67cc9bbf8afc84817a7ed88f17e7636750a0c88c0711ad55501518->enter($__internal_87428cc84c67cc9bbf8afc84817a7ed88f17e7636750a0c88c0711ad55501518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87428cc84c67cc9bbf8afc84817a7ed88f17e7636750a0c88c0711ad55501518->leave($__internal_87428cc84c67cc9bbf8afc84817a7ed88f17e7636750a0c88c0711ad55501518_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_460b3de00d7ffde42579b8eb7754835d1a64e6822876c85ca2a1609fd0a82d5b = $this->env->getExtension("native_profiler");
        $__internal_460b3de00d7ffde42579b8eb7754835d1a64e6822876c85ca2a1609fd0a82d5b->enter($__internal_460b3de00d7ffde42579b8eb7754835d1a64e6822876c85ca2a1609fd0a82d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_460b3de00d7ffde42579b8eb7754835d1a64e6822876c85ca2a1609fd0a82d5b->leave($__internal_460b3de00d7ffde42579b8eb7754835d1a64e6822876c85ca2a1609fd0a82d5b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
