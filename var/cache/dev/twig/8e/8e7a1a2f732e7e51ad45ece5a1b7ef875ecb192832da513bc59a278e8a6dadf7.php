<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_65928f4be035eafa2f9fc227a294b5caeb2925f5741d0531d4794864a8d5af5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b4169b8c16705871f692f57ff8bf733f51672d971dc9ee602600b0cf30f1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b4169b8c16705871f692f57ff8bf733f51672d971dc9ee602600b0cf30f1a7->enter($__internal_b5b4169b8c16705871f692f57ff8bf733f51672d971dc9ee602600b0cf30f1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b4169b8c16705871f692f57ff8bf733f51672d971dc9ee602600b0cf30f1a7->leave($__internal_b5b4169b8c16705871f692f57ff8bf733f51672d971dc9ee602600b0cf30f1a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_383464a1a67ecc84f60204526f3b70e4e66c25ac594900db830d843516422c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383464a1a67ecc84f60204526f3b70e4e66c25ac594900db830d843516422c05->enter($__internal_383464a1a67ecc84f60204526f3b70e4e66c25ac594900db830d843516422c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_383464a1a67ecc84f60204526f3b70e4e66c25ac594900db830d843516422c05->leave($__internal_383464a1a67ecc84f60204526f3b70e4e66c25ac594900db830d843516422c05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ea5f2d49fe85c124c8773fdf6396ba3eca8b8b81a1a8e1e4898ffe7912cf071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea5f2d49fe85c124c8773fdf6396ba3eca8b8b81a1a8e1e4898ffe7912cf071->enter($__internal_1ea5f2d49fe85c124c8773fdf6396ba3eca8b8b81a1a8e1e4898ffe7912cf071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ea5f2d49fe85c124c8773fdf6396ba3eca8b8b81a1a8e1e4898ffe7912cf071->leave($__internal_1ea5f2d49fe85c124c8773fdf6396ba3eca8b8b81a1a8e1e4898ffe7912cf071_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bef170590f9dd5c1652472573bd54249f23887f93bc330c6c7cb4f352e29478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bef170590f9dd5c1652472573bd54249f23887f93bc330c6c7cb4f352e29478->enter($__internal_6bef170590f9dd5c1652472573bd54249f23887f93bc330c6c7cb4f352e29478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6bef170590f9dd5c1652472573bd54249f23887f93bc330c6c7cb4f352e29478->leave($__internal_6bef170590f9dd5c1652472573bd54249f23887f93bc330c6c7cb4f352e29478_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
