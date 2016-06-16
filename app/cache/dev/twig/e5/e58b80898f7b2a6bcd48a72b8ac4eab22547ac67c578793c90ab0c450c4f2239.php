<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9744df4fad078c5c9a28685ba23afab5c26e42bc6dd03c2d78004b7ce70855ac extends Twig_Template
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
        $__internal_acce853d89af21da93e13e9cb73d1607adab45ab9651061227466a510154aba1 = $this->env->getExtension("native_profiler");
        $__internal_acce853d89af21da93e13e9cb73d1607adab45ab9651061227466a510154aba1->enter($__internal_acce853d89af21da93e13e9cb73d1607adab45ab9651061227466a510154aba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_acce853d89af21da93e13e9cb73d1607adab45ab9651061227466a510154aba1->leave($__internal_acce853d89af21da93e13e9cb73d1607adab45ab9651061227466a510154aba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
