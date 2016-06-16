<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_be6770056c89c73e4a8b76728c0f707ad04eebc526965a5020e70e4ac3851f45 extends Twig_Template
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
        $__internal_0aa664aefaf89a2c8429386c796eb9a3b19fc3b4a297289501dd67568c6d4023 = $this->env->getExtension("native_profiler");
        $__internal_0aa664aefaf89a2c8429386c796eb9a3b19fc3b4a297289501dd67568c6d4023->enter($__internal_0aa664aefaf89a2c8429386c796eb9a3b19fc3b4a297289501dd67568c6d4023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0aa664aefaf89a2c8429386c796eb9a3b19fc3b4a297289501dd67568c6d4023->leave($__internal_0aa664aefaf89a2c8429386c796eb9a3b19fc3b4a297289501dd67568c6d4023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
