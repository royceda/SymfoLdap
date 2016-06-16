<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_76b6163fba1cf1542d15ed1b9424e50b9e281bdb193736a37e351020858d2bd0 extends Twig_Template
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
        $__internal_c912c01fd74097587fe983a520b85a8a6599079fb9c7c3804eeac6a62801db9b = $this->env->getExtension("native_profiler");
        $__internal_c912c01fd74097587fe983a520b85a8a6599079fb9c7c3804eeac6a62801db9b->enter($__internal_c912c01fd74097587fe983a520b85a8a6599079fb9c7c3804eeac6a62801db9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c912c01fd74097587fe983a520b85a8a6599079fb9c7c3804eeac6a62801db9b->leave($__internal_c912c01fd74097587fe983a520b85a8a6599079fb9c7c3804eeac6a62801db9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
