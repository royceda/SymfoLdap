<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_463a8955d1351657ad14cc2f31f726a714dd0611d95a199d927cdda64c784b77 extends Twig_Template
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
        $__internal_fb85b33905345a13c4c8c754acc44232f699dcf948d80187dd692bafa8a0a9f9 = $this->env->getExtension("native_profiler");
        $__internal_fb85b33905345a13c4c8c754acc44232f699dcf948d80187dd692bafa8a0a9f9->enter($__internal_fb85b33905345a13c4c8c754acc44232f699dcf948d80187dd692bafa8a0a9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fb85b33905345a13c4c8c754acc44232f699dcf948d80187dd692bafa8a0a9f9->leave($__internal_fb85b33905345a13c4c8c754acc44232f699dcf948d80187dd692bafa8a0a9f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
