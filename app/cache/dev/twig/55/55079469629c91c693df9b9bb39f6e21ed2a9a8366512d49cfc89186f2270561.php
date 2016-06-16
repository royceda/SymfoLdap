<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b8282ebd6b1b493d5cc2dec6b4db9429326501ed06f1a32f3e15b8739f4c0097 extends Twig_Template
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
        $__internal_279837e79ee75a924df90736395d43ec1cf7c300582b1cc90a5f39dae193f9e2 = $this->env->getExtension("native_profiler");
        $__internal_279837e79ee75a924df90736395d43ec1cf7c300582b1cc90a5f39dae193f9e2->enter($__internal_279837e79ee75a924df90736395d43ec1cf7c300582b1cc90a5f39dae193f9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_279837e79ee75a924df90736395d43ec1cf7c300582b1cc90a5f39dae193f9e2->leave($__internal_279837e79ee75a924df90736395d43ec1cf7c300582b1cc90a5f39dae193f9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
