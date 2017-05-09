<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_050ef1571373908badc773f3a9d4c0f1f78a9ebb398e0af4ab0ea6534bdeb4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faa84fc82866123d967c86c8bb33c6ca6a12da37e184b357c711513b4026a398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa84fc82866123d967c86c8bb33c6ca6a12da37e184b357c711513b4026a398->enter($__internal_faa84fc82866123d967c86c8bb33c6ca6a12da37e184b357c711513b4026a398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_faa84fc82866123d967c86c8bb33c6ca6a12da37e184b357c711513b4026a398->leave($__internal_faa84fc82866123d967c86c8bb33c6ca6a12da37e184b357c711513b4026a398_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_42bc8646736313dbbc3987544584f129b8834b8521cc1ce6e3e24bf2d74dc722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bc8646736313dbbc3987544584f129b8834b8521cc1ce6e3e24bf2d74dc722->enter($__internal_42bc8646736313dbbc3987544584f129b8834b8521cc1ce6e3e24bf2d74dc722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_42bc8646736313dbbc3987544584f129b8834b8521cc1ce6e3e24bf2d74dc722->leave($__internal_42bc8646736313dbbc3987544584f129b8834b8521cc1ce6e3e24bf2d74dc722_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
