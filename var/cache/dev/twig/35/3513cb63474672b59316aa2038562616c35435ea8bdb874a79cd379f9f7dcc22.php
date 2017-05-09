<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8ef748b34e82a731f8cfbd8e1379c1d3f1807d19fbe1a2d7e7ef2c7a3aa54058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_bebb7564a513df95e8e8852d71fe03d0419a0c67e43ac7050f51bedb87a0ea22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebb7564a513df95e8e8852d71fe03d0419a0c67e43ac7050f51bedb87a0ea22->enter($__internal_bebb7564a513df95e8e8852d71fe03d0419a0c67e43ac7050f51bedb87a0ea22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebb7564a513df95e8e8852d71fe03d0419a0c67e43ac7050f51bedb87a0ea22->leave($__internal_bebb7564a513df95e8e8852d71fe03d0419a0c67e43ac7050f51bedb87a0ea22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d20952232df9bce1552cf154f915c7893a88b3b6efc85ea34f74033aaaf7e033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20952232df9bce1552cf154f915c7893a88b3b6efc85ea34f74033aaaf7e033->enter($__internal_d20952232df9bce1552cf154f915c7893a88b3b6efc85ea34f74033aaaf7e033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d20952232df9bce1552cf154f915c7893a88b3b6efc85ea34f74033aaaf7e033->leave($__internal_d20952232df9bce1552cf154f915c7893a88b3b6efc85ea34f74033aaaf7e033_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab06040e70471c3d30d240b835e11493263c0f1adacbfe139e5ffcbf37c491e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab06040e70471c3d30d240b835e11493263c0f1adacbfe139e5ffcbf37c491e1->enter($__internal_ab06040e70471c3d30d240b835e11493263c0f1adacbfe139e5ffcbf37c491e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ab06040e70471c3d30d240b835e11493263c0f1adacbfe139e5ffcbf37c491e1->leave($__internal_ab06040e70471c3d30d240b835e11493263c0f1adacbfe139e5ffcbf37c491e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
