<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_01d39659eb03bb18392967cc7be4621ac6d1d3d485aaae597124d5be82dca3c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_323f377084a0478124cd4e291d2888ecf99564fac59b4f8b3abc0e3a57b4a589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323f377084a0478124cd4e291d2888ecf99564fac59b4f8b3abc0e3a57b4a589->enter($__internal_323f377084a0478124cd4e291d2888ecf99564fac59b4f8b3abc0e3a57b4a589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323f377084a0478124cd4e291d2888ecf99564fac59b4f8b3abc0e3a57b4a589->leave($__internal_323f377084a0478124cd4e291d2888ecf99564fac59b4f8b3abc0e3a57b4a589_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e33b1afa5f097bbf50e5a7747a26dd67ff2cea996c7d9c8fab277c3e19cd127b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33b1afa5f097bbf50e5a7747a26dd67ff2cea996c7d9c8fab277c3e19cd127b->enter($__internal_e33b1afa5f097bbf50e5a7747a26dd67ff2cea996c7d9c8fab277c3e19cd127b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e33b1afa5f097bbf50e5a7747a26dd67ff2cea996c7d9c8fab277c3e19cd127b->leave($__internal_e33b1afa5f097bbf50e5a7747a26dd67ff2cea996c7d9c8fab277c3e19cd127b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
