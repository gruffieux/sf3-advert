<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_62f376333f7d08136a73b2c2e4031fea2080ba5d5308828383424d891990692f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_97dcf3d89f642a1e365d180f1e42b142d03426a67c3b1d249190a8d6da4b0a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dcf3d89f642a1e365d180f1e42b142d03426a67c3b1d249190a8d6da4b0a76->enter($__internal_97dcf3d89f642a1e365d180f1e42b142d03426a67c3b1d249190a8d6da4b0a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97dcf3d89f642a1e365d180f1e42b142d03426a67c3b1d249190a8d6da4b0a76->leave($__internal_97dcf3d89f642a1e365d180f1e42b142d03426a67c3b1d249190a8d6da4b0a76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e31979d0d45f2cc7e34845db5a433284517fc9903ca0a3fa021cbd194edf306f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31979d0d45f2cc7e34845db5a433284517fc9903ca0a3fa021cbd194edf306f->enter($__internal_e31979d0d45f2cc7e34845db5a433284517fc9903ca0a3fa021cbd194edf306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e31979d0d45f2cc7e34845db5a433284517fc9903ca0a3fa021cbd194edf306f->leave($__internal_e31979d0d45f2cc7e34845db5a433284517fc9903ca0a3fa021cbd194edf306f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
