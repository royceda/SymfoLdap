<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ebc77af1be8355922df614b09298c299f9c079a554afa643fdb8f20332671f93 extends Twig_Template
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
        $__internal_137e3c2a29ce972475e07a6ad1dfc63b872937ad50a0f1428ad2e3df07dd6746 = $this->env->getExtension("native_profiler");
        $__internal_137e3c2a29ce972475e07a6ad1dfc63b872937ad50a0f1428ad2e3df07dd6746->enter($__internal_137e3c2a29ce972475e07a6ad1dfc63b872937ad50a0f1428ad2e3df07dd6746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_137e3c2a29ce972475e07a6ad1dfc63b872937ad50a0f1428ad2e3df07dd6746->leave($__internal_137e3c2a29ce972475e07a6ad1dfc63b872937ad50a0f1428ad2e3df07dd6746_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
