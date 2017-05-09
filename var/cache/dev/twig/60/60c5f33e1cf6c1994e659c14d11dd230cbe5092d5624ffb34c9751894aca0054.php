<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b8d11ea33122bc2efcf5f813bf77cb3fa2586e11fba40b32fa2a01b8dfa4442a extends Twig_Template
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
        $__internal_c245b0d531d748318f1f3dbcf365b34fcece4e6baed6d1d70ddf348f6f9dc153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c245b0d531d748318f1f3dbcf365b34fcece4e6baed6d1d70ddf348f6f9dc153->enter($__internal_c245b0d531d748318f1f3dbcf365b34fcece4e6baed6d1d70ddf348f6f9dc153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c245b0d531d748318f1f3dbcf365b34fcece4e6baed6d1d70ddf348f6f9dc153->leave($__internal_c245b0d531d748318f1f3dbcf365b34fcece4e6baed6d1d70ddf348f6f9dc153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
