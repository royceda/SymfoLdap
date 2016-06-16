<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7ce2d3a0451025b80d57edbcca62b75d7152be116e3a3044be36913554563db2 extends Twig_Template
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
        $__internal_f14a43662f7689a11d0e9a1ce2cb3d9965901e2046fcf0034d463d2c4669ee01 = $this->env->getExtension("native_profiler");
        $__internal_f14a43662f7689a11d0e9a1ce2cb3d9965901e2046fcf0034d463d2c4669ee01->enter($__internal_f14a43662f7689a11d0e9a1ce2cb3d9965901e2046fcf0034d463d2c4669ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f14a43662f7689a11d0e9a1ce2cb3d9965901e2046fcf0034d463d2c4669ee01->leave($__internal_f14a43662f7689a11d0e9a1ce2cb3d9965901e2046fcf0034d463d2c4669ee01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
