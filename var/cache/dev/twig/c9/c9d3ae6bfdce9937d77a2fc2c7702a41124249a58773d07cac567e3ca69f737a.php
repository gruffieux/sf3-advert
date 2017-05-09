<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2d8660b91700ccf162ef6b8ff28cd50ad3be8cad05298ec736997ea8e7316da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e9fde29b8587d4c2c5f58568b7ed264624b26fdb2585a91c1ce7d46d7f88d476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fde29b8587d4c2c5f58568b7ed264624b26fdb2585a91c1ce7d46d7f88d476->enter($__internal_e9fde29b8587d4c2c5f58568b7ed264624b26fdb2585a91c1ce7d46d7f88d476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9fde29b8587d4c2c5f58568b7ed264624b26fdb2585a91c1ce7d46d7f88d476->leave($__internal_e9fde29b8587d4c2c5f58568b7ed264624b26fdb2585a91c1ce7d46d7f88d476_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc4138278fc7fac9cd6a8c35a9ba92d752f5fc2728b9c5d72d78a59550fa3e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4138278fc7fac9cd6a8c35a9ba92d752f5fc2728b9c5d72d78a59550fa3e12->enter($__internal_cc4138278fc7fac9cd6a8c35a9ba92d752f5fc2728b9c5d72d78a59550fa3e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cc4138278fc7fac9cd6a8c35a9ba92d752f5fc2728b9c5d72d78a59550fa3e12->leave($__internal_cc4138278fc7fac9cd6a8c35a9ba92d752f5fc2728b9c5d72d78a59550fa3e12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
