<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1c4f1d1f8c1fe32469cc6a3d9899e1b5c781193fb1957264d7c9ec797b51b93a extends Twig_Template
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
        $__internal_5c59062732bada4a9800676fa3cc4d28d809a3822127ff1abae868dbd2ffec75 = $this->env->getExtension("native_profiler");
        $__internal_5c59062732bada4a9800676fa3cc4d28d809a3822127ff1abae868dbd2ffec75->enter($__internal_5c59062732bada4a9800676fa3cc4d28d809a3822127ff1abae868dbd2ffec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5c59062732bada4a9800676fa3cc4d28d809a3822127ff1abae868dbd2ffec75->leave($__internal_5c59062732bada4a9800676fa3cc4d28d809a3822127ff1abae868dbd2ffec75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
