<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f46fd62966197604f7eab2ea23eb368262e18c44a5718ad3735c9205c0eddb7b extends Twig_Template
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
        $__internal_a5c6b9ccdcf37f75c73db42f27609854a1aba43053f3f73530b0ede72f74affc = $this->env->getExtension("native_profiler");
        $__internal_a5c6b9ccdcf37f75c73db42f27609854a1aba43053f3f73530b0ede72f74affc->enter($__internal_a5c6b9ccdcf37f75c73db42f27609854a1aba43053f3f73530b0ede72f74affc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a5c6b9ccdcf37f75c73db42f27609854a1aba43053f3f73530b0ede72f74affc->leave($__internal_a5c6b9ccdcf37f75c73db42f27609854a1aba43053f3f73530b0ede72f74affc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
