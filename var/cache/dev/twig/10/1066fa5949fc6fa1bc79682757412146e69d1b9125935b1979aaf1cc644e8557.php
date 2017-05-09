<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9e5843eac36ff688c6941e891da6fc59fc8dacb1ea5691ebd28205d488ae0394 extends Twig_Template
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
        $__internal_22592485cd8a321b58f1c2fd84ad91be2e06ae3f57961bb7f1d46cd8d1859877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22592485cd8a321b58f1c2fd84ad91be2e06ae3f57961bb7f1d46cd8d1859877->enter($__internal_22592485cd8a321b58f1c2fd84ad91be2e06ae3f57961bb7f1d46cd8d1859877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_22592485cd8a321b58f1c2fd84ad91be2e06ae3f57961bb7f1d46cd8d1859877->leave($__internal_22592485cd8a321b58f1c2fd84ad91be2e06ae3f57961bb7f1d46cd8d1859877_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
