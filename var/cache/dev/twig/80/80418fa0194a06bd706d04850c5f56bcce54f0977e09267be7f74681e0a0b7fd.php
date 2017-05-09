<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_782cb5584c10e08d85be281382ce2255f4d4f7d34db68ee83b7d3efeee910db4 extends Twig_Template
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
        $__internal_329cc557fa15f29e720c935344bcae9551c83661bf0922a89eda53f0a7b4ba26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329cc557fa15f29e720c935344bcae9551c83661bf0922a89eda53f0a7b4ba26->enter($__internal_329cc557fa15f29e720c935344bcae9551c83661bf0922a89eda53f0a7b4ba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_329cc557fa15f29e720c935344bcae9551c83661bf0922a89eda53f0a7b4ba26->leave($__internal_329cc557fa15f29e720c935344bcae9551c83661bf0922a89eda53f0a7b4ba26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
