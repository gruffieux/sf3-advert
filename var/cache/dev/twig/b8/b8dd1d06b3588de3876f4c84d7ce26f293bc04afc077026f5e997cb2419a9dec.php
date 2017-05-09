<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_900ba0a37c15f8626634333a1e614d1eb21f5bc47cc8ec77fff2fafd204bf35b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_430dd070f47f9de377bb9286f7dcf22ff9164646dd8c02fbc94e20605d8774a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430dd070f47f9de377bb9286f7dcf22ff9164646dd8c02fbc94e20605d8774a1->enter($__internal_430dd070f47f9de377bb9286f7dcf22ff9164646dd8c02fbc94e20605d8774a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430dd070f47f9de377bb9286f7dcf22ff9164646dd8c02fbc94e20605d8774a1->leave($__internal_430dd070f47f9de377bb9286f7dcf22ff9164646dd8c02fbc94e20605d8774a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d633a282a302fce6ae93f02334c30e9a0517dc659afdc1ef13956b8de16c45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d633a282a302fce6ae93f02334c30e9a0517dc659afdc1ef13956b8de16c45a->enter($__internal_0d633a282a302fce6ae93f02334c30e9a0517dc659afdc1ef13956b8de16c45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0d633a282a302fce6ae93f02334c30e9a0517dc659afdc1ef13956b8de16c45a->leave($__internal_0d633a282a302fce6ae93f02334c30e9a0517dc659afdc1ef13956b8de16c45a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
