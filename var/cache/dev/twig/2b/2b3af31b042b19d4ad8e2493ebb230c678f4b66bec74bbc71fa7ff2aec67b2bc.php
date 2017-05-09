<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_96fa0bd1fc0104f0357bb49697061c4c11349fcae78c2319f5d9a22a0b02179c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c709d4751436b8afe9f6f812f4d1d44c3b3176b48916ba62ead4fd8d8cf2ff71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c709d4751436b8afe9f6f812f4d1d44c3b3176b48916ba62ead4fd8d8cf2ff71->enter($__internal_c709d4751436b8afe9f6f812f4d1d44c3b3176b48916ba62ead4fd8d8cf2ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c709d4751436b8afe9f6f812f4d1d44c3b3176b48916ba62ead4fd8d8cf2ff71->leave($__internal_c709d4751436b8afe9f6f812f4d1d44c3b3176b48916ba62ead4fd8d8cf2ff71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9416ce0f97bc8b7c869901dd3f2c397717ff11bab06d144aa1a080b7d84ca29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9416ce0f97bc8b7c869901dd3f2c397717ff11bab06d144aa1a080b7d84ca29a->enter($__internal_9416ce0f97bc8b7c869901dd3f2c397717ff11bab06d144aa1a080b7d84ca29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9416ce0f97bc8b7c869901dd3f2c397717ff11bab06d144aa1a080b7d84ca29a->leave($__internal_9416ce0f97bc8b7c869901dd3f2c397717ff11bab06d144aa1a080b7d84ca29a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
