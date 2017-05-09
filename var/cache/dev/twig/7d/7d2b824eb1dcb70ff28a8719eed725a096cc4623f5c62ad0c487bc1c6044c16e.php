<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f2cbbe19d191b5c9bc736b82bc5b5c573f1a008d4d2cabf51c3b7331fcee74e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_49f816179f2df93b40c35c0b20b7a9ac81294c88dcdbffde13bd1c7ec123f2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f816179f2df93b40c35c0b20b7a9ac81294c88dcdbffde13bd1c7ec123f2b6->enter($__internal_49f816179f2df93b40c35c0b20b7a9ac81294c88dcdbffde13bd1c7ec123f2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49f816179f2df93b40c35c0b20b7a9ac81294c88dcdbffde13bd1c7ec123f2b6->leave($__internal_49f816179f2df93b40c35c0b20b7a9ac81294c88dcdbffde13bd1c7ec123f2b6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2cf1f12764bf8b2d83a40fc825214425a2f0751282bb938f193499e91ca2a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cf1f12764bf8b2d83a40fc825214425a2f0751282bb938f193499e91ca2a3e->enter($__internal_e2cf1f12764bf8b2d83a40fc825214425a2f0751282bb938f193499e91ca2a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e2cf1f12764bf8b2d83a40fc825214425a2f0751282bb938f193499e91ca2a3e->leave($__internal_e2cf1f12764bf8b2d83a40fc825214425a2f0751282bb938f193499e91ca2a3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
