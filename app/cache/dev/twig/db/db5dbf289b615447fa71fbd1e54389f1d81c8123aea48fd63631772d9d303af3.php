<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_da38c72fc70fbeef524c48caa5572c49561e90e800d5c93e2ce056703875982d extends Twig_Template
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
        $__internal_4036e4a439579f218f7f54893568c9ca6908f2145bfb3495db461d8bc6a848fd = $this->env->getExtension("native_profiler");
        $__internal_4036e4a439579f218f7f54893568c9ca6908f2145bfb3495db461d8bc6a848fd->enter($__internal_4036e4a439579f218f7f54893568c9ca6908f2145bfb3495db461d8bc6a848fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$view['form']->block(\$form, 'attributes', array('attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4036e4a439579f218f7f54893568c9ca6908f2145bfb3495db461d8bc6a848fd->leave($__internal_4036e4a439579f218f7f54893568c9ca6908f2145bfb3495db461d8bc6a848fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php use Symfony\Component\Form\ChoiceList\View\ChoiceGroupView;*/
/* */
/* $translatorHelper = $view['translator']; // outside of the loop for performance reasons! ?>*/
/* <?php $formHelper = $view['form']; ?>*/
/* <?php foreach ($choices as $group_label => $choice): ?>*/
/*     <?php if (is_array($choice) || $choice instanceof ChoiceGroupView): ?>*/
/*         <optgroup label="<?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($group_label, array(), $choice_translation_domain) : $group_label) ?>">*/
/*             <?php echo $formHelper->block($form, 'choice_widget_options', array('choices' => $choice)) ?>*/
/*         </optgroup>*/
/*     <?php else: ?>*/
/*         <option value="<?php echo $view->escape($choice->value) ?>" <?php echo $view['form']->block($form, 'attributes', array('attr' => $choice->attr)) ?><?php if ($is_selected($choice->value, $value)): ?> selected="selected"<?php endif?>><?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($choice->label, array(), $choice_translation_domain) : $choice->label) ?></option>*/
/*     <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
