<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2f0c5549cab5195ca18ef2536e9d4db3dc2009476c1c2d8027f89425ed29f426 extends Twig_Template
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
        $__internal_13c07a2e60c41ba94dea28611694bf4be6dd00b7eb69f0765e42e53dcef021cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c07a2e60c41ba94dea28611694bf4be6dd00b7eb69f0765e42e53dcef021cb->enter($__internal_13c07a2e60c41ba94dea28611694bf4be6dd00b7eb69f0765e42e53dcef021cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_13c07a2e60c41ba94dea28611694bf4be6dd00b7eb69f0765e42e53dcef021cb->leave($__internal_13c07a2e60c41ba94dea28611694bf4be6dd00b7eb69f0765e42e53dcef021cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
