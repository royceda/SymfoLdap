<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1b04db4e00cb0174d3f2b9778eea15022ac82b3d131cd771e07f29e7057d8eac extends Twig_Template
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
        $__internal_e07d3f45dd1f3fb7b8aad71eb20b3299e41ac588d20b5c98b5441821f34cfcb0 = $this->env->getExtension("native_profiler");
        $__internal_e07d3f45dd1f3fb7b8aad71eb20b3299e41ac588d20b5c98b5441821f34cfcb0->enter($__internal_e07d3f45dd1f3fb7b8aad71eb20b3299e41ac588d20b5c98b5441821f34cfcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e07d3f45dd1f3fb7b8aad71eb20b3299e41ac588d20b5c98b5441821f34cfcb0->leave($__internal_e07d3f45dd1f3fb7b8aad71eb20b3299e41ac588d20b5c98b5441821f34cfcb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
