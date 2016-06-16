<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_809bd65b4d860ebdffb79b0ae733b6c1d503e6c80ba834569d18a3f7c510a42b extends Twig_Template
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
        $__internal_52e2863c87918c57634bc2c1ab47404c2243d02f3c2bc8990f1673a23f81f747 = $this->env->getExtension("native_profiler");
        $__internal_52e2863c87918c57634bc2c1ab47404c2243d02f3c2bc8990f1673a23f81f747->enter($__internal_52e2863c87918c57634bc2c1ab47404c2243d02f3c2bc8990f1673a23f81f747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_52e2863c87918c57634bc2c1ab47404c2243d02f3c2bc8990f1673a23f81f747->leave($__internal_52e2863c87918c57634bc2c1ab47404c2243d02f3c2bc8990f1673a23f81f747_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
