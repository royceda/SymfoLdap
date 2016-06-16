<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f281d881b81540e055c230b67d034c0e17d67d5971b747680484854a27252a3d extends Twig_Template
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
        $__internal_5cba7115cccf0a7fa625ceeb3941db19801f3ef6f6bdfe2ef6ead455851676fa = $this->env->getExtension("native_profiler");
        $__internal_5cba7115cccf0a7fa625ceeb3941db19801f3ef6f6bdfe2ef6ead455851676fa->enter($__internal_5cba7115cccf0a7fa625ceeb3941db19801f3ef6f6bdfe2ef6ead455851676fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5cba7115cccf0a7fa625ceeb3941db19801f3ef6f6bdfe2ef6ead455851676fa->leave($__internal_5cba7115cccf0a7fa625ceeb3941db19801f3ef6f6bdfe2ef6ead455851676fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
