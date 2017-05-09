<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d8067358136361bd2c360b7e34bed35bd3448e1f1f429a54f74d2a80a2387ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d31fceffd23192b667ec943dd4cffb519ab931670dba92f259bd45877f31a155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31fceffd23192b667ec943dd4cffb519ab931670dba92f259bd45877f31a155->enter($__internal_d31fceffd23192b667ec943dd4cffb519ab931670dba92f259bd45877f31a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d31fceffd23192b667ec943dd4cffb519ab931670dba92f259bd45877f31a155->leave($__internal_d31fceffd23192b667ec943dd4cffb519ab931670dba92f259bd45877f31a155_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2977d9d61e0ff0d31b5a57d9da4ef82db2878e7bb3334f9ea658f65cdf00eb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2977d9d61e0ff0d31b5a57d9da4ef82db2878e7bb3334f9ea658f65cdf00eb5c->enter($__internal_2977d9d61e0ff0d31b5a57d9da4ef82db2878e7bb3334f9ea658f65cdf00eb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2977d9d61e0ff0d31b5a57d9da4ef82db2878e7bb3334f9ea658f65cdf00eb5c->leave($__internal_2977d9d61e0ff0d31b5a57d9da4ef82db2878e7bb3334f9ea658f65cdf00eb5c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd192027f08385e14191b3008d2f3400ce9f4f1cf6a97e9f9456fe3836f6f059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd192027f08385e14191b3008d2f3400ce9f4f1cf6a97e9f9456fe3836f6f059->enter($__internal_cd192027f08385e14191b3008d2f3400ce9f4f1cf6a97e9f9456fe3836f6f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cd192027f08385e14191b3008d2f3400ce9f4f1cf6a97e9f9456fe3836f6f059->leave($__internal_cd192027f08385e14191b3008d2f3400ce9f4f1cf6a97e9f9456fe3836f6f059_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f01daeb4b849dbb95309da0e5d0e0ef2cd0bd827f8a335bd5f08b7c219ff922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f01daeb4b849dbb95309da0e5d0e0ef2cd0bd827f8a335bd5f08b7c219ff922->enter($__internal_5f01daeb4b849dbb95309da0e5d0e0ef2cd0bd827f8a335bd5f08b7c219ff922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5f01daeb4b849dbb95309da0e5d0e0ef2cd0bd827f8a335bd5f08b7c219ff922->leave($__internal_5f01daeb4b849dbb95309da0e5d0e0ef2cd0bd827f8a335bd5f08b7c219ff922_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
