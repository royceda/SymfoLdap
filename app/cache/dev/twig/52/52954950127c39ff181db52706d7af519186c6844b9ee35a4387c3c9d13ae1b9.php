<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_dd2152133c87aa2835efb0ca4e0d29f4225d390b2159fab8d9f32607a106fb90 extends Twig_Template
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
        $__internal_d29be40cd0678fcf6fe54bbfe287a13d98c52ff60c170253889f2cce66e6b126 = $this->env->getExtension("native_profiler");
        $__internal_d29be40cd0678fcf6fe54bbfe287a13d98c52ff60c170253889f2cce66e6b126->enter($__internal_d29be40cd0678fcf6fe54bbfe287a13d98c52ff60c170253889f2cce66e6b126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d29be40cd0678fcf6fe54bbfe287a13d98c52ff60c170253889f2cce66e6b126->leave($__internal_d29be40cd0678fcf6fe54bbfe287a13d98c52ff60c170253889f2cce66e6b126_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
