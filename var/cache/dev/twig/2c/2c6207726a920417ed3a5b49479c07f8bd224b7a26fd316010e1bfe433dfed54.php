<?php

/* GbrfixPlatformBundle:Advert:apply.html.twig */
class __TwigTemplate_166cab2d7726c00f3dd133fb804d87a2aa2a21286ecaaf8d2b049973da9a0a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:apply.html.twig", 1);
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
        $__internal_792739432a28a76fa1cbc28f45af9e7b01fea0117cb3f13dddd5c3329fa98241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792739432a28a76fa1cbc28f45af9e7b01fea0117cb3f13dddd5c3329fa98241->enter($__internal_792739432a28a76fa1cbc28f45af9e7b01fea0117cb3f13dddd5c3329fa98241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:apply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792739432a28a76fa1cbc28f45af9e7b01fea0117cb3f13dddd5c3329fa98241->leave($__internal_792739432a28a76fa1cbc28f45af9e7b01fea0117cb3f13dddd5c3329fa98241_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecceb274550f3fecefbce18a7deccf07f557f1a46fc509a3503f91566eeffa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecceb274550f3fecefbce18a7deccf07f557f1a46fc509a3503f91566eeffa96->enter($__internal_ecceb274550f3fecefbce18a7deccf07f557f1a46fc509a3503f91566eeffa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postulation"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_ecceb274550f3fecefbce18a7deccf07f557f1a46fc509a3503f91566eeffa96->leave($__internal_ecceb274550f3fecefbce18a7deccf07f557f1a46fc509a3503f91566eeffa96_prof);

    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_d9c81109c9285bcabae2f6c7316b19d00ec91a708b573199b2e5db5a84281a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c81109c9285bcabae2f6c7316b19d00ec91a708b573199b2e5db5a84281a65->enter($__internal_d9c81109c9285bcabae2f6c7316b19d00ec91a708b573199b2e5db5a84281a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postuler à \"abc\""), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Application:form.html.twig");
        echo "
\t
\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.apply.warning"), "html", null, true);
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
        
        $__internal_d9c81109c9285bcabae2f6c7316b19d00ec91a708b573199b2e5db5a84281a65->leave($__internal_d9c81109c9285bcabae2f6c7316b19d00ec91a708b573199b2e5db5a84281a65_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:apply.html.twig";
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

{% block title %}{{ 'Postulation'|trans }} - {{ parent() }}{% endblock %}

{% block platform_body %}

\t<h2>{{'Postuler à \"abc\"'|trans }}</h2>
\t
\t{{ include(\"GbrfixPlatformBundle:Application:form.html.twig\") }}
\t
\t<p>{{ 'advert.apply.warning'|trans }}</p>
\t
\t<p>
\t\t<a href=\"{{ path('gbrfix_platform_view', {'advert_id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t{{ 'advert.back'|trans }}
\t\t</a>
\t</p>
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:apply.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/apply.html.twig");
    }
}
