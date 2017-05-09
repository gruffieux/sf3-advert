<?php

/* GbrfixPlatformBundle:Advert:marker.html.twig */
class __TwigTemplate_f3dad1f147d65bd5dc9bd8185c3f282cfc96e38e8600438dd32d696cac048d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:marker.html.twig", 1);
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
        $__internal_2a9eae97c63a73d5b982cd30232cd64311647b1ccc4f61b550522627a57b5a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9eae97c63a73d5b982cd30232cd64311647b1ccc4f61b550522627a57b5a3f->enter($__internal_2a9eae97c63a73d5b982cd30232cd64311647b1ccc4f61b550522627a57b5a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:marker.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9eae97c63a73d5b982cd30232cd64311647b1ccc4f61b550522627a57b5a3f->leave($__internal_2a9eae97c63a73d5b982cd30232cd64311647b1ccc4f61b550522627a57b5a3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5427deffcc41b464cebf13112ad9ab54a0fad24d6f678bbfbe57d9fa742feafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5427deffcc41b464cebf13112ad9ab54a0fad24d6f678bbfbe57d9fa742feafb->enter($__internal_5427deffcc41b464cebf13112ad9ab54a0fad24d6f678bbfbe57d9fa742feafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favoris"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_5427deffcc41b464cebf13112ad9ab54a0fad24d6f678bbfbe57d9fa742feafb->leave($__internal_5427deffcc41b464cebf13112ad9ab54a0fad24d6f678bbfbe57d9fa742feafb_prof);

    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_629fbc6f5af99c76aad90c7eff43b4db5433c3c2c867091048107438f9a80536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629fbc6f5af99c76aad90c7eff43b4db5433c3c2c867091048107438f9a80536->enter($__internal_629fbc6f5af99c76aad90c7eff43b4db5433c3c2c867091048107438f9a80536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes annonces favorites"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Advert:listMarker.html.twig", array("listMarkers" => (isset($context["listMarkers"]) ? $context["listMarkers"] : $this->getContext($context, "listMarkers"))));
        echo "
\t
";
        
        $__internal_629fbc6f5af99c76aad90c7eff43b4db5433c3c2c867091048107438f9a80536->leave($__internal_629fbc6f5af99c76aad90c7eff43b4db5433c3c2c867091048107438f9a80536_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:marker.html.twig";
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

{% block title %}{{ 'Favoris'|trans }} - {{ parent() }}{% endblock %}

{% block platform_body %}

\t<h2>{{ 'Mes annonces favorites'|trans }}</h2>
\t
\t{{ include('GbrfixPlatformBundle:Advert:listMarker.html.twig', {'listMarkers': listMarkers}) }}
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:marker.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/marker.html.twig");
    }
}
