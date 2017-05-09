<?php

/* GbrfixPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_f8e0958b0a0d10996bff4b0b9ca9ee31fef4288135b1c32f86b4f6ba3f40ffce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GbrfixPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_041292e48d0fc6abfd43a15c243db858bac1c6056255ad2d6059587d3c4d88e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041292e48d0fc6abfd43a15c243db858bac1c6056255ad2d6059587d3c4d88e2->enter($__internal_041292e48d0fc6abfd43a15c243db858bac1c6056255ad2d6059587d3c4d88e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041292e48d0fc6abfd43a15c243db858bac1c6056255ad2d6059587d3c4d88e2->leave($__internal_041292e48d0fc6abfd43a15c243db858bac1c6056255ad2d6059587d3c4d88e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53eb043f5817f74e27113cf8d4bd23d86e15bb0ab77e587cf0c4c59f755045bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53eb043f5817f74e27113cf8d4bd23d86e15bb0ab77e587cf0c4c59f755045bb->enter($__internal_53eb043f5817f74e27113cf8d4bd23d86e15bb0ab77e587cf0c4c59f755045bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        
        $__internal_53eb043f5817f74e27113cf8d4bd23d86e15bb0ab77e587cf0c4c59f755045bb->leave($__internal_53eb043f5817f74e27113cf8d4bd23d86e15bb0ab77e587cf0c4c59f755045bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9937d42cd090d03a1716060e8a8d95f17f700bc2ba8b21041f5f9e3ebbfddb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9937d42cd090d03a1716060e8a8d95f17f700bc2ba8b21041f5f9e3ebbfddb96->enter($__internal_9937d42cd090d03a1716060e8a8d95f17f700bc2ba8b21041f5f9e3ebbfddb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.add.title"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Advert:form.html.twig");
        echo "
\t
\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.add.warning"), "html", null, true);
        echo "</p>
\t
";
        
        $__internal_9937d42cd090d03a1716060e8a8d95f17f700bc2ba8b21041f5f9e3ebbfddb96->leave($__internal_9937d42cd090d03a1716060e8a8d95f17f700bc2ba8b21041f5f9e3ebbfddb96_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  63 => 9,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} - {{ 'Add'|trans }}{% endblock %}

{% block body %}

\t<h2>{{ 'advert.add.title'|trans }}</h2>
\t
\t{{ include(\"GbrfixPlatformBundle:Advert:form.html.twig\") }}
\t
\t<p>{{ 'advert.add.warning'|trans }}</p>
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:add.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
