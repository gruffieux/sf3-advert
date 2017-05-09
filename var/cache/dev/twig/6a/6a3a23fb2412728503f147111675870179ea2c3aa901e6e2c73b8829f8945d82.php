<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_48c9ad279e618274f6c85f4c65b7324839a1f8c03724f5c15166d2b688eb8745 extends Twig_Template
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
        $__internal_1626278d2425f3d8b8caf2956f7f56f07dc15e85cca0655aefef7f036d7966a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1626278d2425f3d8b8caf2956f7f56f07dc15e85cca0655aefef7f036d7966a2->enter($__internal_1626278d2425f3d8b8caf2956f7f56f07dc15e85cca0655aefef7f036d7966a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1626278d2425f3d8b8caf2956f7f56f07dc15e85cca0655aefef7f036d7966a2->leave($__internal_1626278d2425f3d8b8caf2956f7f56f07dc15e85cca0655aefef7f036d7966a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
