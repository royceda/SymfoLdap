<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_93d0bc6641618dd682256870384fa4c53db6669a488bbc886b31ae782a3de4c2 extends Twig_Template
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
        $__internal_89500e3e7f935a28a8908fa791a8e6ea62a55eb7143439180bdc91623e0dbf1a = $this->env->getExtension("native_profiler");
        $__internal_89500e3e7f935a28a8908fa791a8e6ea62a55eb7143439180bdc91623e0dbf1a->enter($__internal_89500e3e7f935a28a8908fa791a8e6ea62a55eb7143439180bdc91623e0dbf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_89500e3e7f935a28a8908fa791a8e6ea62a55eb7143439180bdc91623e0dbf1a->leave($__internal_89500e3e7f935a28a8908fa791a8e6ea62a55eb7143439180bdc91623e0dbf1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
