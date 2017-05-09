<?php

/* GbrfixPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_5630ddf6ee4ef9af9aae5be0a47e361fd1640c9c16917d99100e33a38bc33cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GbrfixPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63d497177b1afb85e7c8c238aee7710cbc467db202665782c79a31e5c4e2d108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d497177b1afb85e7c8c238aee7710cbc467db202665782c79a31e5c4e2d108->enter($__internal_63d497177b1afb85e7c8c238aee7710cbc467db202665782c79a31e5c4e2d108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d497177b1afb85e7c8c238aee7710cbc467db202665782c79a31e5c4e2d108->leave($__internal_63d497177b1afb85e7c8c238aee7710cbc467db202665782c79a31e5c4e2d108_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e07515429dec9862a148f436f615adb8d7380a362b5c85e942ac189eb7eaff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e07515429dec9862a148f436f615adb8d7380a362b5c85e942ac189eb7eaff2->enter($__internal_8e07515429dec9862a148f436f615adb8d7380a362b5c85e942ac189eb7eaff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_8e07515429dec9862a148f436f615adb8d7380a362b5c85e942ac189eb7eaff2->leave($__internal_8e07515429dec9862a148f436f615adb8d7380a362b5c85e942ac189eb7eaff2_prof);

    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_df0b79dbcd8ec652d904c697d0e6ad90dd9ece42c3bff27bd4cdf864d7d5349b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0b79dbcd8ec652d904c697d0e6ad90dd9ece42c3bff27bd4cdf864d7d5349b->enter($__internal_df0b79dbcd8ec652d904c697d0e6ad90dd9ece42c3bff27bd4cdf864d7d5349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.title"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Advert:list.html.twig", array("listAdverts" => (isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts"))));
        echo "
\t
";
        
        $__internal_df0b79dbcd8ec652d904c697d0e6ad90dd9ece42c3bff27bd4cdf864d7d5349b->leave($__internal_df0b79dbcd8ec652d904c697d0e6ad90dd9ece42c3bff27bd4cdf864d7d5349b_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GbrfixPlatformBundle::layout.html.twig\" %}

{% block title %}{{ 'Home'|trans }} - {{ parent() }}{% endblock %}

{% block platform_body %}

\t<h2>{{ 'advert.title'|trans }}</h2>
\t
\t{{ include('GbrfixPlatformBundle:Advert:list.html.twig', {'listAdverts': listAdverts}) }}
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:index.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
