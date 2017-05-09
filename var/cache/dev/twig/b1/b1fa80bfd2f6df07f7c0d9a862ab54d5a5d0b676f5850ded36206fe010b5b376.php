<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3d8f998e18f4c5a9c9316ff1a48bc3dcba78b44a0279c3c4b2fc24ebff013353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_867d5ca9fe2908b605f4214626d938a7395cae3bc6bd167d4231113de453aa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867d5ca9fe2908b605f4214626d938a7395cae3bc6bd167d4231113de453aa7c->enter($__internal_867d5ca9fe2908b605f4214626d938a7395cae3bc6bd167d4231113de453aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_867d5ca9fe2908b605f4214626d938a7395cae3bc6bd167d4231113de453aa7c->leave($__internal_867d5ca9fe2908b605f4214626d938a7395cae3bc6bd167d4231113de453aa7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea514d390cb645da855a8930a1915322f77c263f81eb42f7b6589674b943eaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea514d390cb645da855a8930a1915322f77c263f81eb42f7b6589674b943eaee->enter($__internal_ea514d390cb645da855a8930a1915322f77c263f81eb42f7b6589674b943eaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ea514d390cb645da855a8930a1915322f77c263f81eb42f7b6589674b943eaee->leave($__internal_ea514d390cb645da855a8930a1915322f77c263f81eb42f7b6589674b943eaee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
