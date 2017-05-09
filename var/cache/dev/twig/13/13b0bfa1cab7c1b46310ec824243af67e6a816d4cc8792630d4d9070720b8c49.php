<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7f9e6da2ffb5b1fa78b76f58d144108821ee8d17c1dc77c63a17df6b97b8c2a4 extends Twig_Template
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
        $__internal_c24b2005a5d6a6668dcd4c0c2d976e5aa59b3dfeb57d3c7de1f3894e3990aa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24b2005a5d6a6668dcd4c0c2d976e5aa59b3dfeb57d3c7de1f3894e3990aa20->enter($__internal_c24b2005a5d6a6668dcd4c0c2d976e5aa59b3dfeb57d3c7de1f3894e3990aa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c24b2005a5d6a6668dcd4c0c2d976e5aa59b3dfeb57d3c7de1f3894e3990aa20->leave($__internal_c24b2005a5d6a6668dcd4c0c2d976e5aa59b3dfeb57d3c7de1f3894e3990aa20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
