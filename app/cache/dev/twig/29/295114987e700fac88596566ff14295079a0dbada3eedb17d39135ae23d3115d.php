<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9d29b4ece162eaffb76e88a71b858615ea8d1246c1ccbd5d89c1e56ace456b5c extends Twig_Template
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
        $__internal_1e51b6bd68319f779b9d3aa99d2197e8fde81b08a57a1a46078f81522814a810 = $this->env->getExtension("native_profiler");
        $__internal_1e51b6bd68319f779b9d3aa99d2197e8fde81b08a57a1a46078f81522814a810->enter($__internal_1e51b6bd68319f779b9d3aa99d2197e8fde81b08a57a1a46078f81522814a810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1e51b6bd68319f779b9d3aa99d2197e8fde81b08a57a1a46078f81522814a810->leave($__internal_1e51b6bd68319f779b9d3aa99d2197e8fde81b08a57a1a46078f81522814a810_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
