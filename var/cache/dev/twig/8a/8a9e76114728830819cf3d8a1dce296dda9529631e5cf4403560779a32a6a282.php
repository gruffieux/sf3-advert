<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_aef667c5a6f0b66f87e424b5cafbec482264610e96c2749df51c84875c8effa6 extends Twig_Template
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
        $__internal_48cbdf91defa06ce1ce55c749bc67b2c742e4910f1e5331b43280a27f7a20a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cbdf91defa06ce1ce55c749bc67b2c742e4910f1e5331b43280a27f7a20a70->enter($__internal_48cbdf91defa06ce1ce55c749bc67b2c742e4910f1e5331b43280a27f7a20a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_48cbdf91defa06ce1ce55c749bc67b2c742e4910f1e5331b43280a27f7a20a70->leave($__internal_48cbdf91defa06ce1ce55c749bc67b2c742e4910f1e5331b43280a27f7a20a70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
