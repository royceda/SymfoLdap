<?php

/* OCUserBundle:Security:login.html.twig */
class __TwigTemplate_0db2043d81695b61afd7438d79193f28edf800ef75ea833b31d5b0e728d37b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89a82e2ea0d98e6021cd8dc7c3c325b684fc1ada5af01df41cd1bbb70e476db0 = $this->env->getExtension("native_profiler");
        $__internal_89a82e2ea0d98e6021cd8dc7c3c325b684fc1ada5af01df41cd1bbb70e476db0->enter($__internal_89a82e2ea0d98e6021cd8dc7c3c325b684fc1ada5af01df41cd1bbb70e476db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        // line 2
        echo "

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_89a82e2ea0d98e6021cd8dc7c3c325b684fc1ada5af01df41cd1bbb70e476db0->leave($__internal_89a82e2ea0d98e6021cd8dc7c3c325b684fc1ada5af01df41cd1bbb70e476db0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ca91cff34e1e99fcbb6e2ebb2d81f60447dd643804a7b4a5c8d7686dec9e79dc = $this->env->getExtension("native_profiler");
        $__internal_ca91cff34e1e99fcbb6e2ebb2d81f60447dd643804a7b4a5c8d7686dec9e79dc->enter($__internal_ca91cff34e1e99fcbb6e2ebb2d81f60447dd643804a7b4a5c8d7686dec9e79dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        // line 7
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 10
        echo "

  ";
        // line 13
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_ca91cff34e1e99fcbb6e2ebb2d81f60447dd643804a7b4a5c8d7686dec9e79dc->leave($__internal_ca91cff34e1e99fcbb6e2ebb2d81f60447dd643804a7b4a5c8d7686dec9e79dc_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  54 => 13,  50 => 10,  44 => 8,  41 => 7,  39 => 6,  27 => 5,  23 => 2,);
    }
}
/* {# src/OC/UserBundle/Resources/views/Security/login.html.twig #}*/
/* */
/* */
/* {# extends "OCCoreBundle::layout.html.twig" #}*/
/* {% block body %}*/
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*   <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
