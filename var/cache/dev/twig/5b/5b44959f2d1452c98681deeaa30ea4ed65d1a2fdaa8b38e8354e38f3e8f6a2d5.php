<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a80dc4b42fe6229b41a4f39a1c0936bff1a0b85b9ad71ff86aa7ff1c2bc483a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e744ec80be5732ffb61a5b17ff5800e433cdd39cf5df9c33bc23241f0fc84f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e744ec80be5732ffb61a5b17ff5800e433cdd39cf5df9c33bc23241f0fc84f6->enter($__internal_5e744ec80be5732ffb61a5b17ff5800e433cdd39cf5df9c33bc23241f0fc84f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e744ec80be5732ffb61a5b17ff5800e433cdd39cf5df9c33bc23241f0fc84f6->leave($__internal_5e744ec80be5732ffb61a5b17ff5800e433cdd39cf5df9c33bc23241f0fc84f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8133a10d7aa9591b12e88f407246b234c05d2a10130528620785feaf9af35dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8133a10d7aa9591b12e88f407246b234c05d2a10130528620785feaf9af35dd0->enter($__internal_8133a10d7aa9591b12e88f407246b234c05d2a10130528620785feaf9af35dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8133a10d7aa9591b12e88f407246b234c05d2a10130528620785feaf9af35dd0->leave($__internal_8133a10d7aa9591b12e88f407246b234c05d2a10130528620785feaf9af35dd0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
