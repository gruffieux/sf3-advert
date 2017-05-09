<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3dabb2244a2e51a10994dba1b34238588d21dfbfea56b3982b5b422759f0cc71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1258fec1675560d9528e427a4d437f1bce5dea7a86176f131c688051b3c1db6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1258fec1675560d9528e427a4d437f1bce5dea7a86176f131c688051b3c1db6e->enter($__internal_1258fec1675560d9528e427a4d437f1bce5dea7a86176f131c688051b3c1db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1258fec1675560d9528e427a4d437f1bce5dea7a86176f131c688051b3c1db6e->leave($__internal_1258fec1675560d9528e427a4d437f1bce5dea7a86176f131c688051b3c1db6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_832cb55badc7159c89b76e154e8ad463dc0bbb3c4167e28592f318d7ba6c7890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832cb55badc7159c89b76e154e8ad463dc0bbb3c4167e28592f318d7ba6c7890->enter($__internal_832cb55badc7159c89b76e154e8ad463dc0bbb3c4167e28592f318d7ba6c7890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_832cb55badc7159c89b76e154e8ad463dc0bbb3c4167e28592f318d7ba6c7890->leave($__internal_832cb55badc7159c89b76e154e8ad463dc0bbb3c4167e28592f318d7ba6c7890_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_067dab54284bf2b02ae85462bab9575d3d45d44021968b20659bce16a60cf9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067dab54284bf2b02ae85462bab9575d3d45d44021968b20659bce16a60cf9d1->enter($__internal_067dab54284bf2b02ae85462bab9575d3d45d44021968b20659bce16a60cf9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_067dab54284bf2b02ae85462bab9575d3d45d44021968b20659bce16a60cf9d1->leave($__internal_067dab54284bf2b02ae85462bab9575d3d45d44021968b20659bce16a60cf9d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dfc2d17030de34bbd831552cb7990330c6175b4ed07928196ddc0702a3763df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfc2d17030de34bbd831552cb7990330c6175b4ed07928196ddc0702a3763df->enter($__internal_1dfc2d17030de34bbd831552cb7990330c6175b4ed07928196ddc0702a3763df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1dfc2d17030de34bbd831552cb7990330c6175b4ed07928196ddc0702a3763df->leave($__internal_1dfc2d17030de34bbd831552cb7990330c6175b4ed07928196ddc0702a3763df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
