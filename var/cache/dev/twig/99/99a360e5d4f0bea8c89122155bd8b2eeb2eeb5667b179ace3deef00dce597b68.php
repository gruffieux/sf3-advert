<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b9c51cf903a26844a14aa89f924dc9a80b5c7d04a8a1f158c1b8eb94f73dbf07 extends Twig_Template
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
        $__internal_7df6b6d9d487a67ca8fd8554ece7248f23dd81c6418cf055ce8edc59080ee00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df6b6d9d487a67ca8fd8554ece7248f23dd81c6418cf055ce8edc59080ee00b->enter($__internal_7df6b6d9d487a67ca8fd8554ece7248f23dd81c6418cf055ce8edc59080ee00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7df6b6d9d487a67ca8fd8554ece7248f23dd81c6418cf055ce8edc59080ee00b->leave($__internal_7df6b6d9d487a67ca8fd8554ece7248f23dd81c6418cf055ce8edc59080ee00b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
