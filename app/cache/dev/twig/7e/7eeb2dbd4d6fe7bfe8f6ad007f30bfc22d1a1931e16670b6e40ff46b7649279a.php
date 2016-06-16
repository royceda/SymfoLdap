<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_573c4aa89df67b2139f38b70f6328041255319a17c208bc9a255d6eedf976308 extends Twig_Template
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
        $__internal_e7217c0ee52f3fd8ff25426c9c8d02b8549b9fae7ac56941b3f05e87fe599d52 = $this->env->getExtension("native_profiler");
        $__internal_e7217c0ee52f3fd8ff25426c9c8d02b8549b9fae7ac56941b3f05e87fe599d52->enter($__internal_e7217c0ee52f3fd8ff25426c9c8d02b8549b9fae7ac56941b3f05e87fe599d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e7217c0ee52f3fd8ff25426c9c8d02b8549b9fae7ac56941b3f05e87fe599d52->leave($__internal_e7217c0ee52f3fd8ff25426c9c8d02b8549b9fae7ac56941b3f05e87fe599d52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
