<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e6b5e5b93f1c53ff8dc1362db3bb299dbd2662a2974b1a1a2653a9577ab71ff1 extends Twig_Template
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
        $__internal_b91d2a6673a5af52c2c9f3e1dcc6c46a5368243beaa36993336efe8c4f4474ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91d2a6673a5af52c2c9f3e1dcc6c46a5368243beaa36993336efe8c4f4474ed->enter($__internal_b91d2a6673a5af52c2c9f3e1dcc6c46a5368243beaa36993336efe8c4f4474ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b91d2a6673a5af52c2c9f3e1dcc6c46a5368243beaa36993336efe8c4f4474ed->leave($__internal_b91d2a6673a5af52c2c9f3e1dcc6c46a5368243beaa36993336efe8c4f4474ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
