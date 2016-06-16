<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_32bd151864f0b15d2c6d9d69e56c6410b927c231ffe468325cb80c628c2f5ed4 extends Twig_Template
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
        $__internal_dca07bae3814e7415e19214235dad444e15a37a225cb94dcc4b8fd471d8bfa07 = $this->env->getExtension("native_profiler");
        $__internal_dca07bae3814e7415e19214235dad444e15a37a225cb94dcc4b8fd471d8bfa07->enter($__internal_dca07bae3814e7415e19214235dad444e15a37a225cb94dcc4b8fd471d8bfa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_dca07bae3814e7415e19214235dad444e15a37a225cb94dcc4b8fd471d8bfa07->leave($__internal_dca07bae3814e7415e19214235dad444e15a37a225cb94dcc4b8fd471d8bfa07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
