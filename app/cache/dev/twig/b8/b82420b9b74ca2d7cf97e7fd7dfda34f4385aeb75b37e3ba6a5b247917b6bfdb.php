<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_016939dd4cc543332b1e622c88634c5f03ab317060360603a3400103fd90c53e extends Twig_Template
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
        $__internal_a17d92365ab3ad048f4e76339d18fa0637bc18470db41b2bdf84088b67a34a45 = $this->env->getExtension("native_profiler");
        $__internal_a17d92365ab3ad048f4e76339d18fa0637bc18470db41b2bdf84088b67a34a45->enter($__internal_a17d92365ab3ad048f4e76339d18fa0637bc18470db41b2bdf84088b67a34a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a17d92365ab3ad048f4e76339d18fa0637bc18470db41b2bdf84088b67a34a45->leave($__internal_a17d92365ab3ad048f4e76339d18fa0637bc18470db41b2bdf84088b67a34a45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
