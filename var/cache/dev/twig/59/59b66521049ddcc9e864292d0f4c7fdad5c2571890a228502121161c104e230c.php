<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3b7b2b52a9c81d95b52a0c470cc24b679a2c732738bf47a025f2f0dac8aec7ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a703ecc6d8a5521b00478f1be85c9ad5589aa8e66b96ad7f34a100b539a8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a703ecc6d8a5521b00478f1be85c9ad5589aa8e66b96ad7f34a100b539a8c8->enter($__internal_a8a703ecc6d8a5521b00478f1be85c9ad5589aa8e66b96ad7f34a100b539a8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a703ecc6d8a5521b00478f1be85c9ad5589aa8e66b96ad7f34a100b539a8c8->leave($__internal_a8a703ecc6d8a5521b00478f1be85c9ad5589aa8e66b96ad7f34a100b539a8c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16916c75febbaa386e1e54a7cf1258700429003752d19f2f9b623af7150284d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16916c75febbaa386e1e54a7cf1258700429003752d19f2f9b623af7150284d7->enter($__internal_16916c75febbaa386e1e54a7cf1258700429003752d19f2f9b623af7150284d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_16916c75febbaa386e1e54a7cf1258700429003752d19f2f9b623af7150284d7->leave($__internal_16916c75febbaa386e1e54a7cf1258700429003752d19f2f9b623af7150284d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
