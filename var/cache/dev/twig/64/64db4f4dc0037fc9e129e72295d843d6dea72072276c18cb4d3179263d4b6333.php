<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c0b0e4e4f0fab3e75dfa6078c8132e3c1982474cdf8005fd469ab4e468cadb70 extends Twig_Template
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
        $__internal_3c03246780e14e530d921ff607b48aa36d3f0c9b64ffc900b0c31f3cd1b8a0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c03246780e14e530d921ff607b48aa36d3f0c9b64ffc900b0c31f3cd1b8a0fd->enter($__internal_3c03246780e14e530d921ff607b48aa36d3f0c9b64ffc900b0c31f3cd1b8a0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3c03246780e14e530d921ff607b48aa36d3f0c9b64ffc900b0c31f3cd1b8a0fd->leave($__internal_3c03246780e14e530d921ff607b48aa36d3f0c9b64ffc900b0c31f3cd1b8a0fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
