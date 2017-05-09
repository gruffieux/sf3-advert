<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_1d1e9fab7b3f18fe5e55ab0f6966630580e83553e18f2521db7518a5e0a5819e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_9755a74899df74fc8bd6de354edbf08b0f4084feac870bcde90ba649399a31f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9755a74899df74fc8bd6de354edbf08b0f4084feac870bcde90ba649399a31f2->enter($__internal_9755a74899df74fc8bd6de354edbf08b0f4084feac870bcde90ba649399a31f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9755a74899df74fc8bd6de354edbf08b0f4084feac870bcde90ba649399a31f2->leave($__internal_9755a74899df74fc8bd6de354edbf08b0f4084feac870bcde90ba649399a31f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdf9aabe5de1825d2fc32914cde9b798e6b76e91f93d61335104189f903433a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf9aabe5de1825d2fc32914cde9b798e6b76e91f93d61335104189f903433a0->enter($__internal_cdf9aabe5de1825d2fc32914cde9b798e6b76e91f93d61335104189f903433a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_cdf9aabe5de1825d2fc32914cde9b798e6b76e91f93d61335104189f903433a0->leave($__internal_cdf9aabe5de1825d2fc32914cde9b798e6b76e91f93d61335104189f903433a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
