<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_37a3f9f511b83caf5397b0e8458907d677eaffd1bcca66033c4f604c6a934136 extends Twig_Template
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
        $__internal_4f52dd0606235409bf84e1b26ea3b4b9c1c1aff66b6dfaeaf290256b70bdb943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f52dd0606235409bf84e1b26ea3b4b9c1c1aff66b6dfaeaf290256b70bdb943->enter($__internal_4f52dd0606235409bf84e1b26ea3b4b9c1c1aff66b6dfaeaf290256b70bdb943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4f52dd0606235409bf84e1b26ea3b4b9c1c1aff66b6dfaeaf290256b70bdb943->leave($__internal_4f52dd0606235409bf84e1b26ea3b4b9c1c1aff66b6dfaeaf290256b70bdb943_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
