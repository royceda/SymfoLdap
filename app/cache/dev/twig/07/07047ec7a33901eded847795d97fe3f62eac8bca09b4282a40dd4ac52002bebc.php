<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9bdf15946ef5642dd4653ebaa9f80b97926ed2125b6f6a5f7a8f0b401af37ed1 extends Twig_Template
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
        $__internal_9185fdbdada4274e8cbad04aa32bd3e72f49190653235099e4ca3ddf88d196d1 = $this->env->getExtension("native_profiler");
        $__internal_9185fdbdada4274e8cbad04aa32bd3e72f49190653235099e4ca3ddf88d196d1->enter($__internal_9185fdbdada4274e8cbad04aa32bd3e72f49190653235099e4ca3ddf88d196d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9185fdbdada4274e8cbad04aa32bd3e72f49190653235099e4ca3ddf88d196d1->leave($__internal_9185fdbdada4274e8cbad04aa32bd3e72f49190653235099e4ca3ddf88d196d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
