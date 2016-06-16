<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1452bdb8bc6fb024a08d21a26ae37db033da8eca22dc6b7c91155a889f77cd01 extends Twig_Template
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
        $__internal_eba75b9fa46eaf3e9f3e069419d9177eab4dffedd691e97e68241da3cdeafa7e = $this->env->getExtension("native_profiler");
        $__internal_eba75b9fa46eaf3e9f3e069419d9177eab4dffedd691e97e68241da3cdeafa7e->enter($__internal_eba75b9fa46eaf3e9f3e069419d9177eab4dffedd691e97e68241da3cdeafa7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_eba75b9fa46eaf3e9f3e069419d9177eab4dffedd691e97e68241da3cdeafa7e->leave($__internal_eba75b9fa46eaf3e9f3e069419d9177eab4dffedd691e97e68241da3cdeafa7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
