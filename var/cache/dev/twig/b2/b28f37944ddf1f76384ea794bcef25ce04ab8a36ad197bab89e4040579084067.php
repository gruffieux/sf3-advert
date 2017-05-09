<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40fdaf1e4de174f4604c6abc1bceadeda3b1b85ee6cd7a6d648c0540affbb80b extends Twig_Template
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
        $__internal_aeff1c12750ab2f4ef2ab0c18151f0010195fccac7d236d90c9a1bbd73515284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeff1c12750ab2f4ef2ab0c18151f0010195fccac7d236d90c9a1bbd73515284->enter($__internal_aeff1c12750ab2f4ef2ab0c18151f0010195fccac7d236d90c9a1bbd73515284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_aeff1c12750ab2f4ef2ab0c18151f0010195fccac7d236d90c9a1bbd73515284->leave($__internal_aeff1c12750ab2f4ef2ab0c18151f0010195fccac7d236d90c9a1bbd73515284_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
