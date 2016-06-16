<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4725c8dc75eb89ab4e450958a28f425679e204123b01058c115712dc2488a4f1 extends Twig_Template
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
        $__internal_a635ecb056a17dddb293c810aae420069549fba35d4df5a0fb23c7af925b2a6b = $this->env->getExtension("native_profiler");
        $__internal_a635ecb056a17dddb293c810aae420069549fba35d4df5a0fb23c7af925b2a6b->enter($__internal_a635ecb056a17dddb293c810aae420069549fba35d4df5a0fb23c7af925b2a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a635ecb056a17dddb293c810aae420069549fba35d4df5a0fb23c7af925b2a6b->leave($__internal_a635ecb056a17dddb293c810aae420069549fba35d4df5a0fb23c7af925b2a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
