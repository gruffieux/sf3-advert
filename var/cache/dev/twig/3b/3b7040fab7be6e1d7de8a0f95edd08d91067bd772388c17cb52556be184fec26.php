<?php

/* GbrfixPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_a5dbc7edbd4bfca16c8dcc9fbb434aef761cdb51c70ca8656039fba176887d6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:edit.html.twig", 1);
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
        $__internal_1eed9bfedf4971c1aface4ef9f14e63b8f744642068f9bb476ca686ddb469b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eed9bfedf4971c1aface4ef9f14e63b8f744642068f9bb476ca686ddb469b2b->enter($__internal_1eed9bfedf4971c1aface4ef9f14e63b8f744642068f9bb476ca686ddb469b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eed9bfedf4971c1aface4ef9f14e63b8f744642068f9bb476ca686ddb469b2b->leave($__internal_1eed9bfedf4971c1aface4ef9f14e63b8f744642068f9bb476ca686ddb469b2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c52e69ab37ee73cf4b17ba2d291be610378047125d4e0672e8c1f166ca2ae7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52e69ab37ee73cf4b17ba2d291be610378047125d4e0672e8c1f166ca2ae7ce->enter($__internal_c52e69ab37ee73cf4b17ba2d291be610378047125d4e0672e8c1f166ca2ae7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_c52e69ab37ee73cf4b17ba2d291be610378047125d4e0672e8c1f166ca2ae7ce->leave($__internal_c52e69ab37ee73cf4b17ba2d291be610378047125d4e0672e8c1f166ca2ae7ce_prof);

    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_019698d8d9ffbaffbaf1e073b662a51aea6d6edbc0df039e34cc15d1fbd49a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019698d8d9ffbaffbaf1e073b662a51aea6d6edbc0df039e34cc15d1fbd49a85->enter($__internal_019698d8d9ffbaffbaf1e073b662a51aea6d6edbc0df039e34cc15d1fbd49a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.edit.title"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Advert:form.html.twig");
        echo "
\t
\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.edit.warning"), "html", null, true);
        echo "</p>
\t
\t<p>
\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_view", array("advert_id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.back"), "html", null, true);
        echo "
\t\t</a>
\t</p>
\t
";
        
        $__internal_019698d8d9ffbaffbaf1e073b662a51aea6d6edbc0df039e34cc15d1fbd49a85->leave($__internal_019698d8d9ffbaffbaf1e073b662a51aea6d6edbc0df039e34cc15d1fbd49a85_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  74 => 14,  68 => 11,  63 => 9,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{ 'Edit'|trans }} - {{ parent() }}{% endblock %}

{% block platform_body %}

\t<h2>{{ 'advert.edit.title'|trans }}</h2>
\t
\t{{ include(\"GbrfixPlatformBundle:Advert:form.html.twig\") }}
\t
\t<p>{{ 'advert.edit.warning'|trans }}</p>
\t
\t<p>
\t\t<a href=\"{{ path('gbrfix_platform_view', {'advert_id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t{{ 'advert.back'|trans }}
\t\t</a>
\t</p>
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:edit.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
