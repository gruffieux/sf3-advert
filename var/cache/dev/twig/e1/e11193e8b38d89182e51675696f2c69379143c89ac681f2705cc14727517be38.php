<?php

/* GbrfixPlatformBundle::layout.html.twig */
class __TwigTemplate_3d4d49585f773a196439e5dd04a21dae2bf3030f20dedc95cbfd1248d0d741b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GbrfixPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d19732e8fc3fba1c79a6d0d82ec6a96a02440c47b8aff91536166033d3083bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19732e8fc3fba1c79a6d0d82ec6a96a02440c47b8aff91536166033d3083bd8->enter($__internal_d19732e8fc3fba1c79a6d0d82ec6a96a02440c47b8aff91536166033d3083bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19732e8fc3fba1c79a6d0d82ec6a96a02440c47b8aff91536166033d3083bd8->leave($__internal_d19732e8fc3fba1c79a6d0d82ec6a96a02440c47b8aff91536166033d3083bd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e43a794f67476c611c46ff3eb546d650d0ef5b0253149420a8b6bbe1ad841f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e43a794f67476c611c46ff3eb546d650d0ef5b0253149420a8b6bbe1ad841f7->enter($__internal_4e43a794f67476c611c46ff3eb546d650d0ef5b0253149420a8b6bbe1ad841f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e43a794f67476c611c46ff3eb546d650d0ef5b0253149420a8b6bbe1ad841f7->leave($__internal_4e43a794f67476c611c46ff3eb546d650d0ef5b0253149420a8b6bbe1ad841f7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b9aa67c40eab01b496b94b0e36adb54b6bf4afc3a43d2f5ecf0a221e4aecb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9aa67c40eab01b496b94b0e36adb54b6bf4afc3a43d2f5ecf0a221e4aecb79->enter($__internal_1b9aa67c40eab01b496b94b0e36adb54b6bf4afc3a43d2f5ecf0a221e4aecb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Annonces</h1>
\t
\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Today", array("%date%" => twig_localized_date_filter($this->env, "now", "full", "none"), "%time%" => twig_localized_date_filter($this->env, "now", "none", "short"))), "html", null, true);
        echo "</p>
\t
\t<hr>
\t
\t";
        // line 16
        echo "\t";
        $this->displayBlock('platform_body', $context, $blocks);
        // line 18
        echo "\t
";
        
        $__internal_1b9aa67c40eab01b496b94b0e36adb54b6bf4afc3a43d2f5ecf0a221e4aecb79->leave($__internal_1b9aa67c40eab01b496b94b0e36adb54b6bf4afc3a43d2f5ecf0a221e4aecb79_prof);

    }

    // line 16
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_b743e3d40165db29548c31a29ad48fb6ca62b44b7f504cccbef8e8ca910f98f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b743e3d40165db29548c31a29ad48fb6ca62b44b7f504cccbef8e8ca910f98f4->enter($__internal_b743e3d40165db29548c31a29ad48fb6ca62b44b7f504cccbef8e8ca910f98f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 17
        echo "\t";
        
        $__internal_b743e3d40165db29548c31a29ad48fb6ca62b44b7f504cccbef8e8ca910f98f4->leave($__internal_b743e3d40165db29548c31a29ad48fb6ca62b44b7f504cccbef8e8ca910f98f4_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  82 => 16,  74 => 18,  71 => 16,  64 => 11,  60 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}
\tAnnonces - {{ parent() }}
{% endblock %}

{% block body %}
\t{# Sous-titre commun à toutes les pages du bundle #}
\t<h1>Annonces</h1>
\t
\t<p>{{ 'Today'|trans({'%date%': 'now'|localizeddate('full', 'none'), '%time%': 'now'|localizeddate('none', 'short') }) }}</p>
\t
\t<hr>
\t
\t{# Bloc à remplir par les vues du bundle #}
\t{% block platform_body %}
\t{% endblock %}
\t
{% endblock %}", "GbrfixPlatformBundle::layout.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/layout.html.twig");
    }
}
