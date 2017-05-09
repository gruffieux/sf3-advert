<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1e1af4b3a8d5e70b8b111f88d78fc7522de1b76f0b817da8bafd0ff8302163c6 extends Twig_Template
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
        $__internal_385099a72b1833ca41dbfca2d3b0624566def0dc3f28856f29d64b00798a42be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385099a72b1833ca41dbfca2d3b0624566def0dc3f28856f29d64b00798a42be->enter($__internal_385099a72b1833ca41dbfca2d3b0624566def0dc3f28856f29d64b00798a42be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_385099a72b1833ca41dbfca2d3b0624566def0dc3f28856f29d64b00798a42be->leave($__internal_385099a72b1833ca41dbfca2d3b0624566def0dc3f28856f29d64b00798a42be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
